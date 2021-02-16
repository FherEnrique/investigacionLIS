<?php
session_start();
$valor = $_POST['valorBusqueda'];
$pattern = "/[1-9]{1}+[0-9]\.[0-9]{2}\z/";
if (preg_match($pattern, $valor)) {
	echo '<i class="fas fa-check-circle" id="good"></i> verificación exitosa';
	$_SESSION["func5"] = true;
}else{
	echo '<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado';
	$_SESSION["func5"] = false;
}
?>