<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/script.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <title>HTML 5 Boilerplate</title>
    <?php
            include("boostrap.php");
    ?>


</head>

<body>

   
    <br>


    <div>
        <h1> "Smart Watch Bluetooth* </h1>
        <h2>con pantalla touch"</h2>
        <hr>
    </div>
    <div class="box" id="foto1">
        <img class="foto1" src="imagenes/imagen1.jpg" alt="imagen 1">
    </div>
    <div class="box" id="parrafo">

        <h5><b>Precio:$42.00</b></h5>

        <p>Pantalla Full Touch a color de 1,7"</p>
        <p>Lee notificaciones de Facebook, WhatsApp, Twitter y más</p>
        <p>Mide frecuencia cardiaca, presión arterial, oxigeno en la sangre y temperatura</p>
        <h5>¡Mantente al tanto de tu salud y siempre conectado!</h5>
    </div>
    <div class="center">
        <div class="addnumber_cont">
            <button id="disableBtn" onclick="addValueFunction(this)" value="decrease">
                < </button>
                    <div class="value_cont">
                        <h4 id="amount" value="">0</h4>
                    </div>
                    <button onclick="addValueFunction(this)" value="increase">
                        >
                    </button>
        </div>
    </div>








</html>