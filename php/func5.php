<?php
$valor = $_POST['valorBusqueda'];
$pattern = "/$[1-9]{1}+[0-9]\.[0-9]{2}/";
if (preg_match($pattern, $valor)) {
	echo '<i class="fas fa-check-circle" id="good"></i> verificación exitosa';
}else{
	echo '<i class="fas fa-exclamation-circle" id="error"></i> verificación ha fallado';
}
?>