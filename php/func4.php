<?php
$valor = $_POST['valorBusqueda'];
$pattern = "/[A-Za-z]+@[a-z]+\.[a-z]+/";
if (preg_match($pattern, $valor)) {
	echo '<i class="fas fa-check-circle" id="good"></i> verificación exitosa';
}else{
	echo '<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado';
}
?>