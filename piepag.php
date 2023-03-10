<?php
 $productos = array(    1 => array("INFORMACIÓN", "Sobre Nosotros", "Sucursales", "Seguridad y Privacidad",
                                "Condicion de Uso"),
                        2 => array("NUESTRA OFERTA","Destacados","Productos Nuevos","Mas Vendidos","Fabricantes","Comentarios"),
                        3 => array("COMPRAS & SERVICIOS","Iniciar la Sesión","Cómo comprar","Pedidos del interior","Garantía y devoluciones"),
                        4 => array("MANTENTE EN CONTACTO","Facebook  ","Twiter","Instagram","Youtube"),
                        5 => array(" CONTÁCTENOS", "CarrritoS.A. Vía Ricardo J Afaro (Tumba Muerto), Edif. Green Hills Locales #1-4 ,Panamá",
                                "ventas@carrito.com","+507 260 79 59","+507 6998-0010"),);
 

 
 
/* echo "<table border=\"1\">";
 echo "<thead><tr><td>titulo</td><td>sub1</td><td>sub2</td><td>sub3</td><td>sub4</td></tr></thead>";
 
     foreach ($productos as $key => $p) {
         if ($p[4] > 5) {
             echo "<tr>";
             echo "<td>" . $p[0] . $key . "</td>";
             echo "<td>" . $p[1] . $key . "</td>";
             echo "<td>" . $p[2] . $key . "</td>";
             echo "<td>" . $p[3] . $key."</td>";
             echo "<td>" . $p[4] ."</td>";
             echo "</tr>";
         }
      }
 echo  "</table>";
 */
 
 echo "<div class=\"w3-container piedepag\">";
 foreach ($productos as $key => $p) {

?>

    <div class="card-group mt-3">
        <div class="card-body">
            <div class="card " style="width: 14rem; background-color:#232F3E;  border-white">
                <div ALIGN=left>
                    <h6 class="card-title"><b><?php echo $p[0];?></b></h6>
                    <a style="color:#ffffff;" href="#" class="card-link"><?php echo $p[1];?></a>
                    <br>
                    <a style="color:#ffffff;" href="#" class="card-link"><?php echo $p[2];?></a>
                    <br>
                    <a style="color:#ffffff;" href="#" class="card-link"><?php echo $p[3];?></a>
                    <br>
                    <a style="color:#ffffff;" href="#" class="card-link"><?php echo $p[4];?></a>


                
            </div>
        </div>

    </div>
</div>


<?php } 

      echo "</div>";
?>