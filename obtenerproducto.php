<?php
$connection = mysqli_connect("localhost", "root", "","company");






            $productos = array( 1 => array("SMART WATCH-300", "imagenes/imagen1.jpg", "Smart Watch Bluetooth* con pantalla touch","$42.00", "$39.90"),
                                2 => array("SMART WATCH-200", "imagenes/imagen2.jpg","Smart Watch Bluetooth* con pantalla Full Touch", "$37.00", "$35.00"),
                                3 => array("SMART WATCH-100", "imagenes/imagen3.jpg","SportBand Bluetooth", "$20.00","$18.99"),
                                4 => array("PRO-300", "imagenes/imagen4.jpg","Proyector multimedia HD de 7000 lúmenes, portátil"," $122.99", "$115.00"),
                                5 => array("PRO-230", "imagenes/imagen5.jpg","Mini proyector multimedia de 2800 lúmenes, portátil", "$130.99", "$120.00"),
                                6 => array("PRO-400", "imagenes/imagen6.jpg","Proyector multimedia Full HD de 9 000 lúmenes, portátil", "$219.99", "$202.99"),
                                7 => array("NB-900", "imagenes/voltaje1.jpg","UPS de hasta 85 min de respaldo, 900 VA", "$134.99", "$130.99"),
                                8 => array("REG-1050", "imagenes/voltaje2.jpg","Regulador de voltaje 1,000 W con 8 contactos", "$32.99", "$30.00"),
                                9 => array("NB-050", "imagenes/voltaje3.jpg","Mini No Break (UPS) para módem", "$36.99", "$34.99"),
                                10 => array("RMX-100","imagenes/extensor1.jpg","Extensor de control remoto alámbrico","20.99","18.99"),
                                11 => array("208-105","imagenes/extensor2.jpg","Extensor pasivo HDMI, de 30m","36.49","32.99"),
                                12 => array("208-187","imagenes/extensor.jpg","Extensor de control remoto por HDMI","12.00","10.00"),);
                  
               /*     
                    echo "<table border=\"1\">";
                    echo "<thead><tr><td>Producto</td><td>Imagen</td><td>Descripcion</td><td>Precio</td><td>Precio de Oferta</td></tr></thead>";
                    
                        foreach ($productos as $key => $p) {
                            if ($p[2] > 12) {
                                echo "<tr>";
                                echo "<td>" . $p[0] . $key . "</td>";
                                echo "<td>" . $p[1] . $key . "</td>";
                                echo "<td>" . $p[2] . $key . "</td>";
                                echo "<td>" . $p[3] . "</td>";
                                echo "<td>" . $p[4] . "</td>";
                                echo "</tr>";
                            }
                         }
                    echo  "</table>";
              */      
?>
<div class="container text-center">
    <div class="row s_nb_column_fixed">
        <div class="col-lg-12 te_title_1 pt32 o_colored_level">
            <h4 class="te_s_title_default te_title_style1">
                <b>PRODUCTOS ESPECIALES</b>
            </h4>
        </div>
    </div>

    <br>
    <?php
                    echo "<div class=\"row\">";
                    foreach ($productos as $key => $p) {
                ?>

    <form action="index.php" method="post">
       
        <input id="llave" name="llave" type="hidden" value="<?php echo $p[0]; ?>">

        <input id="submit" name="submit" type="submit" value=" Login ">
      

    </form>


    <div class="col -lg">
        <div class="container-sm titulo"><?php echo $p[0];?></div>
        <img src="<?php echo $p[1]; ?>" width="200" height="250">
        <div class="container-sm titulo "><?php echo $p[2];?></div>
        <div class="container-lg "> <span class="badge badge-danger"><?php echo $p[3];?></span>//<span
                class="badge badge-warning"><?php echo $p[4];?></span> </div>
        <div class="container-icono">
            <i class="bi-cart"></i>
            <i class="bi-heart-fill"></i>
            <i class="bi-eye"></i>
        </div>

    </div>

    <?php } 
      echo "</div>";
?>