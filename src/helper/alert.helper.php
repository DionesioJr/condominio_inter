<?php
class Alert
{

    public static function  show()
    {
        if (!empty($_SESSION['alert']) && count($_SESSION['alert']) > 0) {
            foreach ($_SESSION['alert'] as $key => $alert) {
                echo $alert;
            }
            unset($_SESSION['alert']);
        }
    }

    public static function success($message, $view = 0)
    {

        $_SESSION['alert'][$view] = '<script>
            toastr.success("' . $message . '", "Sucesso!", {
                "closeButton": true,
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
            
            });
        </script>';
    }

    public static function info($message, $view = 0)
    {
        $_SESSION['alert'][$view] = '<script>
            toastr.info("' . $message . '", "Informação!", {
                "closeButton": true,
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
            
            });
        </script>';
    }

    public static function warning($message, $view = 0)
    {
        $_SESSION['alert'][$view] = '<script>
            toastr.warning("' . $message . '", "Atenção!", {
                "closeButton": true,
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
            
            });
        </script>';
    }

    public static function error($message, $view = 0)
    {
        $_SESSION['alert'][$view] = '<script>
            toastr.error("' . $message . '", "Erro!", {
                "closeButton": true,
                "debug": true,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
            
            });
        </script>';
    }
}
