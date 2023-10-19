<?php
require_once "../controladores/formularios.controlador.php";
require_once "../modelos/formularios_modelo.php";

class AjaxFormulariosController{ 

/**
 * valor de email existente
 */
public $validarEmail;

public function ajaxValidarEmail() {

$item="email";
$valor= $this->validarEmail;
 $respuesta=ControladorFormularios::ctrSeleccionarRegistros($item,$valor);
 //echo '<pre>';print_r($respuesta); echo '</pre>';
 echo json_encode($respuesta);
}
}
/**
 * Objetos de AJAX que recibe la variable POST
 */

if(isset($_POST["validarEmail"])){
    $valEmail=new AjaxFormulariosController();
    $valEmail -> validarEmail=$_POST["validarEmail"];
    $valEmail -> ajaxValidarEmail();
}
?>  