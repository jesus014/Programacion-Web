<?php
require_once dirname (__FILE__). '/include/smarty.php';

    $modulo = isset($_GET['modulo']) ? $_GET['modulo'] : "inicio";
    $ruta =  dirname(__FILE__)."/modulos/{$modulo}.php";
    if ( file_exists ($ruta) ){
        require_once $ruta;

    }
    
    else{
        $smarty-> assign("titulo", "modulo no encontrado");
        $smarty-> assign("modulo", $modulo);
        $smarty-> assign("contenido", "error.tpl");

        }
    require_once $ruta;
    $smarty->display('layout.tpl');


?>
