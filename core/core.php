<?php




/*
*----------------------------------------------------------------
*  @description: Cregando a view
*----------------------------------------------------------------
*/
class LoadingView
{

    function __construct($view = null, $data = null)
    {
        $this->index($view, $data);
    }

    static public function index($view, $data)
    {
        if (!empty($view)) {
            if (file_exists("src/view/{$view}.view.php")) {
                require_once("src/view/{$view}.view.php");
            }
        }
    }
}


/*
*----------------------------------------------------------------
*  @description: Função respinsavel por instanciar as classes enviada pela rota
*----------------------------------------------------------------
*/
function router($routes = false)
{
    $_SESSION['method'] = null;
    $_SESSION['class'] = null;
    $patterns = array('/[^a-zA-Z0-9 -]/');

    $URL_PARAMETER = str_replace(BASE_URL, '', "{$_SERVER['REQUEST_SCHEME']}://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
    $PARAMETER = explode("/", $URL_PARAMETER);



    if (!empty($PARAMETER)) {

        if (!empty($PARAMETER[1])) {
            $_SESSION['class'] = preg_replace($patterns, '', $PARAMETER[1]);

            if (!empty($PARAMETER[2])) {
                $_SESSION['method'] = preg_replace($patterns, '', $PARAMETER[2]);
            }
        }
    }

    $class = $_SESSION['class'];
    $method = $_SESSION['method'];

    if (class_exists($class)) {

        $class_obj = new $class();
        sessionStart();

        if (isset($method)) {
            $class_obj->$method();
        } else {
            $class_obj->index();
        }
    } else {
        Login::index();
    }
}

function redirect($router)
{
    $dest = BASE_URL . '/' . $router;
    $dest = addslashes($dest);
    if (!headers_sent()) {

        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Content-Type: application/xml; charset=utf-8");
        header("Location: $dest");
        exit();
    }
}

function redirectBack()
{
    $dest = addslashes($_SERVER['HTTP_REFERER']);
    if (!headers_sent()) {

        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Content-Type: application/xml; charset=utf-8");
        header("Location: $dest");
        exit();
    }
}

function sessionStart()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_cache_expire(43200); // 30 dias
        session_start();
    }
}
