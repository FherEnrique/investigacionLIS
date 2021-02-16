<?php
$valor = $_POST['valorBusqueda'];
$pattern = "/[0-9][0-9]/";
if (preg_match($pattern, $valor)) {
	echo '<i class="fas fa-check-circle" id="good"></i> verificación exitosa';
}else{
	echo '<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado';
}
?>