<?php
require_once("config.php");
require_once("controlador/productoController.php");
require_once("controlador/provedorController.php");
require_once("controlador/categoriaController.php");
require_once("controlador/crear_pdf.php");


if(isset($_GET['c'])){
    $controlador= $_GET['c'];
    if($controlador=="productos"){
        $controlador = new productoController;
    }elseif($controlador=="provedor"){
        $controlador = new provedorController;
    }elseif($controlador=="categoria"){
        $controlador = new categoriaController;
    }elseif($controlador=="pdfProductos"){
        $controlador = new PDF;
    }else{
        require_once("vista/index.php");
    }
    if(isset($_GET['m'])):
        $metodo =   $_GET['m'];
        if(method_exists($controlador,$metodo)):
            $controlador::{$metodo}();
        endif;
    else:
        require_once("vista/index.php");
    endif;
}else{
    require_once("vista/index.php");
}
    
?>