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
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="busqueda" id="busqueda" autocomplete="off" required onkeyup="buscar();"><br>
            <div id="resultadoBusqueda" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
        </div><br><br>
        <label>Número de contacto del interesados</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="busqueda" id="busqueda" autocomplete="off" required onkeyup="buscar();"><br>
            <div id="resultadoBusqueda" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
        </div><br><br>
        <label>Correo del interesado</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="busqueda" id="busqueda" autocomplete="off" required onkeyup="buscar();"><br>
            <div id="resultadoBusqueda" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
        </div><br><br>
        <label>Ingresos promedios mensuales</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="busqueda" id="busqueda" autocomplete="off" required onkeyup="buscar();"><br>
            <div id="resultadoBusqueda" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
        </div><br><br>
        <labe>Número de habitantes en la casa</label>
        <div class="input-group margin-bottom-sm">
            <input class="form-control" type="text" placeholder="Ingrese parametros de busqueda" name="busqueda" id="busqueda" autocomplete="off" required onkeyup="buscar();"><br>
            <div id="resultadoBusqueda" class="container"><i class="fas fa-exclamation-circle" id="error"></i> Verificacion ha fallado</div>
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
        $("#resultadonombres").html('Verificacion ha fallado');
     };
};
</script>
</body>
</html>