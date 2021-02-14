<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./js/jquery.js"></script>
    <title>Beca "N de Nayib"</title>
    <script src="https://kit.fontawesome.com/2944ad1077.js" crossorigin="anonymous"></script>
    <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->
    <style>
        #error{
            color: red;
        }
        #good{
            color: green;/*<i class="fas fa-check-circle"></i> */
        }
    </style>
</head>
<body>
<section class="lo">
    <form method="POST" role="form"><br>
        <label >Nombres del interesado:</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="nombres" id="nombres" autocomplete="off" required onkeyup="funcnombres()"><br>
            <div id="resultadonombres" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
        </div><br><br>
        <label>Apellidos del interesado</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="apellidos" id="apellidos" autocomplete="off" required onkeyup="funcapellidos();"><br>
            <div id="resultadoapellidos" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
        </div><br><br>
        <label>Número de contacto del interesados</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="contacto" id="contacto" autocomplete="off" required onkeyup="funccontacto();"><br>
            <div id="resultadocontacto" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
        </div><br><br>
        <label>Correo del interesado</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="correo" id="correo" autocomplete="off" required onkeyup="funccorreo();"><br>
            <div id="resultadocorreo" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
        </div><br><br>
        <label>Ingresos promedios mensuales</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="ingreso" id="ingreso" autocomplete="off" required onkeyup="funcingreso();"><br>
            <div id="resultadoingreso" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
        </div><br><br>
        <labe>Número de habitantes en la casa</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="familia" id="familia" autocomplete="off" required onkeyup="funcfamilia();"><br>
            <div id="resultadofamilia" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
        </div><br><br>
    </form>
</section>
<br><br>


<script>
function funcnombres() {
    var textoBusqueda = $("input#nombres").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func1.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadonombres").html(mensaje);
         }); 
     } else { 
        $("#resultadonombres").html('<i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado');
     };
};
function funcapellidos() {
    var textoBusqueda = $("input#apellidos").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func2.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoapellidos").html(mensaje);
         }); 
     } else { 
        $("#resultadoapellidos").html('<i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado');
     };
};
function funccontacto() {
    var textoBusqueda = $("input#contacto").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func3.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadocontacto").html(mensaje);
         }); 
     } else { 
        $("#resultadocontacto").html('<i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado');
     };
};
function funccorreo() {
    var textoBusqueda = $("input#correo").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func4.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadocorreo").html(mensaje);
         }); 
     } else { 
        $("#resultadocorreo").html('<i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado');
     };
};
function funcingreso() {
    var textoBusqueda = $("input#ingreso").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func5.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoingreso").html(mensaje);
         }); 
     } else { 
        $("#resultadoingreso").html('<i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado');
     };
};
function funcfamilia() {
    var textoBusqueda = $("input#familia").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func6.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadofamilia").html(mensaje);
         }); 
     } else { 
        $("#resultadofamilia").html('<i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado');
     };
};
</script>
</body>
</html>