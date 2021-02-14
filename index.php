<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./js/jquery.js"></script>
    <title>Beca "N de Nayib"</title>
    <script src="https://kit.fontawesome.com/2944ad1077.js" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
<section class="lo">
    <form method="POST" role="form"><br>
        <label for="inp1">Nombres del interesado:</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="nombres" id="nombres" autocomplete="off" required onkeyup="funcnombres()"><br>
            <div id="resultadoBusqueda" class="container"></div>
        </div><br><br>
        <label for="inp2">Apellidos del interesado</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="busqueda" id="busqueda" autocomplete="off" required onkeyup="buscar();"><br>
            <div id="resultadoBusqueda" class="container"></div>
        </div><br><br>
        <label for="inp1">Celular/Telefono del interesados</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="busqueda" id="busqueda" autocomplete="off" required onkeyup="buscar();"><br>
            <div id="resultadoBusqueda" class="container"></div>
        </div><br><br>
        <label for="inp1">Parametros de busquedad (modelo, empresa)</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="busqueda" id="busqueda" autocomplete="off" required onkeyup="buscar();"><br>
            <div id="resultadoBusqueda" class="container"></div>
        </div><br><br>
        <label for="inp1">Parametros de busquedad (modelo, empresa)</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="busqueda" id="busqueda" autocomplete="off" required onkeyup="buscar();"><br>
            <div id="resultadoBusqueda" class="container"></div>
        </div><br><br>
        <label for="inp1">Parametros de busquedad (modelo, empresa)</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="busqueda" id="busqueda" autocomplete="off" required onkeyup="buscar();"><br>
            <div id="resultadoBusqueda" class="container"></div>
        </div><br><br>
    </form>
</section>
<br><br>


<script>
$(document).ready(function() {$("#resultadoBusqueda").html('Verificacion ha fallado');
});

function funcnombres() {
    var textoBusqueda = $("input#nombres").val();
 
     if (textoBusqueda != "") {
        $.post("./php/func1.php", {valorBusqueda: textoBusqueda}, function(mensaje) {
            $("#resultadoBusqueda").html(mensaje);
         }); 
     } else { 
        $("#resultadoBusqueda").html('Verificacion ha fallado');
     };
};
</script>
</body>
</html>