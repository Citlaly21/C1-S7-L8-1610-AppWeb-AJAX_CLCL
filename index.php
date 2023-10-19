<?php
# Index:
# En el mostraremos la salida de las vistas al usuario y tambien a traves de el le
# enviaremos 
#requiere(). Establece que el codigo del archivo invocado es requerido
#es decir, obligatorio para el funcionamiento del programa.por ello, se
#el archivo especificado en la funcion require() no se encuentra
#saldra un error "PHO Faatal error" y el programa php se detiene
#utilizar la versión ONCE, se impide la carga de un mismo archivo
#mas de una  vez
    require_once("controladores/plantilla_clcl.controlador.php");
    require_once("controladores/formularios.controlador.php");
    require_once("modelos/formularios_modelo.php");
    $plantilla = new ControladorPlantilla();
    $plantilla -> ctrTraerPlantilla();
?>