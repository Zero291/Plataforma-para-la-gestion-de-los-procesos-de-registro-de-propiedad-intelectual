<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//Estilos/estiloGeneral.css">
    <title>Tecnm</title>
</head>

<body>



    <?php
    include "../Modulos/header.php";
    ?>


    <fieldset >
        <div class="contenedorRegistro">
        <form>
            <div class=" camporegistro1">
                <label> Nombre</label>
                <input class="camporegistroin1" type="text">
            </div>

            <div class=" camporegistro2">
                <label>Apellido Paterno</label>
                <input class="camporegistroin" type="text">
            </div>

            <div class=" camporegistro3">
                <label>Apellido Materno</label>
                <input class="camporegistroin" type="text">
            </div>

        </form>
        </div>
    </fieldset>







    <div class="contenedorFooter">
        <?php

        include "../Modulos/footer.php";
        ?>
    </div>

</body>

</html>