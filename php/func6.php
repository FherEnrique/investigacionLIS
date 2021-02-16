<?php
session_start();
$valor = $_POST['valorBusqueda'];
$pattern = "/^[[:digit:]]+$/";
if (preg_match($pattern, $valor)) {
	if ($valor >= 1) {
		echo '<i class="fas fa-check-circle" id="good"></i> verificación exitosa';
		$_SESSION["func6"] = true;
	} else {
		echo '<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado';
		$_SESSION["func6"] = false;
	}
	
	
}else{
	echo '<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado';
	$_SESSION["func6"] = false;
}
?>