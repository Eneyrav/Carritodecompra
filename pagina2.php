<?php
$connection = mysqli_connect("localhost", "root", "","company");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML 5 Boilerplate</title>
    <link rel="stylesheet" href="css/style.css">
    <?php
            include("boostrap.php");
    ?>


</head>

<body><header>

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
<a href="index.php"><button type="button">VOLVER</button></a>
    <br>

    <center><table>
  	
      <tr>
            <th>Id</th>
            <th>Producto</th>
            <th>Descripcion</th>
            <th>Imagen</th>
            <th>Almacen</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Precio Oferta</th>
      </tr>
          <?php 
              $consulta= "SELECT O.id,O.tipo, O.nombre,O.imagen,B.nombres,P.cantidad, O.precior,O.precioferta 
              FROM Bodega B, productos O,bodega_productos P 
              WHERE O.nombre LIKE's%' 
              LIMIT 3; ;";
              $result=mysqli_query($connection,$consulta);
              $total=0;
                   while($mostrar=mysqli_fetch_array($result)){
                    ?>
         
                    <tr>
                        <td><?php echo $mostrar['id'] ?></td>
                        <td><?php echo $mostrar['tipo'] ?></td>
                        <td><?php echo $mostrar['nombre'] ?></td>
                        <td><img src=" <?php echo $mostrar ['imagen']?> "  width="100" alt ="" srcset=""  ></td>
                        <td><?php echo $mostrar['nombres'] ?></td>
                        <td><?php echo $mostrar['cantidad'] ?></td>
                        <td style="text-align: right"><?php echo "$ {$mostrar['precior']}";
                            ?></td>
                        <td style="text-align: right"><?php echo "$ {$mostrar['precioferta']}";
                           ?></td>
                    </tr>
                 
                    <?php
                }
      
          ?>
           </table><center>

           <?php
                include("piepag.php");
            ?>


    <?php
                include("footer.php");
           ?>



</body>



</html>