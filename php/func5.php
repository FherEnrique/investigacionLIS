<?php
session_start();
$valor = $_POST['valorBusqueda'];
$pattern = "/^[0-9]+([.][0-9]+)?$/";
if (preg_match($pattern, $valor)) {
	echo '<i class="fas fa-check-circle" id="good"></i> verificación exitosa';
	$_SESSION["func5"] = true;
}else{
	echo '<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado';
	$_SESSION["func5"] = false;
}
?>