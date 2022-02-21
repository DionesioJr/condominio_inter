<?php

/*
*----------------------------------------------------------------
*  @description: Configurando auto load dos arquivs
*----------------------------------------------------------------
*/
spl_autoload_register(function ($class_name) {

    $class_controller   = strtolower("src/controller/$class_name.controller.php");
    if (file_exists($class_controller)) {
        require_once($class_controller);
    }

    $class_model   = strtolower("src/model/$class_name.model.php");
    if (file_exists($class_model)) {
        require_once($class_model);
    }

    $class_helper   = strtolower("src/helper/$class_name.helper.php");
    if (file_exists($class_helper)) {
        require_once($class_helper);
    }
});

?>