<?php

$prod="";
if(isset($_POST['llave'])){
$prod=$_POST['llave'];
echo "Este es el producto".$prod;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
 window.onload = showHint();
 window.onload = startInterval;
 function startInterval() {
 setInterval("showHint();",1000);//cada 5 segundos
 }
 function showHint(){
 var objXMLHttpRequest = new XMLHttpRequest();
 objXMLHttpRequest.onreadystatechange = function() {
 if(objXMLHttpRequest.readyState === 4) {
 if(objXMLHttpRequest.status === 200) {
 //alert(objXMLHttpRequest.responseText);
 if (this.readyState == 4 && this.status == 200) {
 myObj = this.responseText;
 text = myObj.toString().replaceAll('"', ' ');
 document.getElementById("hora").innerHTML = text;
 document.getElementById("horapie").innerHTML = text;
 }
 } 
 }
 }
 objXMLHttpRequest.open('GET', 'fechahora.php');
 objXMLHttpRequest.send();
 }</script>
    <?php
            include("boostrap.php");
    ?>


</head>

<body>

    <header>

        <nav class="navbar navbar-expand-lg navbar-dark">
            <a class="navbar-brand" href="index.php"><img src="imagenes/logo.png" alt="" width="70" height="58"
                    class="rounded-circle"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Productos
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Computadoras</a>
                            <a class="dropdown-item" href="pagina2.php">Relojes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="correos.php">Contactos</a>
                    </li>
                </ul>
                <form class="form-inline ">
                    <input class="form-control rounded" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" type="submit">Search</button>
                </form>
            </div>
            <a class="navbar-brand" href="#">
                <a href="#"><img src="imagenes/index.png" alt="" height="60" class="rounded-circle"></a>
            </a>
        </nav>
    </header>
    <?php
         include("headslice.php");
    ?>
    <br>
    <a href="index.php"><button type="button" position="absolute">VOLVER</button></a>

    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
            <li class="page-item"><a class="page-link" href="index.php">1</a></li>
            <li class="page-item"><a class="page-link" href="pagina2.php">2</a></li>
            <li class="page-item"><a class="page-link" href="pagina3.php">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav>

    <center><h4 style="font-size: 10px;"><i><?php echo "Fecha del Servidor: ";?>
    <span id="hora"></span></i></h4></center>

    <?php
    echo "Este es el producto: ".$prod;
    if(isset($prod)) {
        if($prod=='' || empty($prod)) { 
            include("obtenerproducto.php");
        } else {
            include("producto1.php");
        }
    }    
            ?>
            

    </div>
    <BR>

    <?php
                include("piepag.php");
            ?>


    <?php
                include("footer.php");
           ?>

</body>

<?php
            include("boostrapjs.php");
    ?>

</html>