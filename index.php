<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Estilos/estiloGeneral.css">
    <link rel="stylesheet" href="./Estilos/normalize.css">
    <title>TECNM</title>
</head>

<body>


    <div class="Contenedorprincipal">

        <div class="headerstyle">
            <?php
            include "Modulos/header.php";
            ?>
        </div>



        <div class="contenedorIntroduccion">
            <img class="impi" src="./imagenes/impi.png">
        </div>

        <div class="contenedorNoticia">
            <h1>OTROS LINKS</h1>
        </div>

        <div class="contenedorLogin">
            <a href="#" class="botonlogin">Interesado</a>
            <a href="#" class="botonlogin">Administrador</a>
            <div class="loginuser">
                <label> Correo</label><input class="campo" type="text" name="user" id="usercampo">
            </div>
            <div class="loginpass">
                <label>Contraseña:</label><input class="campo" type="password" name="contra" id="contraseñacampo">
            </div>
            <a href="" class="botonlogin">Acceder</a>
            <a href="Vistas/Registro.php" class="botonlogin">Registrarse</a>
            <a href="#" class="botonlogin">¿Olvidaste tu contraseña?</a>
        </div>
        <div class="contenedorLink">
            <div class="contenedorLinkPatente">
                <a class="linkpatentes" href="#">Conoce si tu investigación, invento, marca, etc. ya fue patentada</a>
            </div>
        </div>
        <div class="contenedorFooter">
            <?php
            include "Modulos/footer.php";
            ?>
        </div>
    </div>






</body>

</html>