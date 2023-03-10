<?php

$productos = array( 1 => array("Producto", "Descripcion", 35.78),
                    2 => array("Producto", "Descripcion", 41.12),
                    3 => array("Producto", "Descripcion", 84.45),
                    4 => array("Producto", "Descripcion", 132.12),
                    5 => array("Producto", "Descripcion", 58.35),
                    6 => array("Producto", "Descripcion", 158.35),
                    7 => array("Producto", "Descripcion", 500.35),
                    8 => array("Producto", "Descripcion", 250.35),
                    9 => array("Producto", "Descripcion", 174.35),
                    10 => array("Producto", "Descripcion", 80.35),
                    11 => array("Producto", "Descripcion", 314.35),
                    12 => array("Producto", "Descripcion", 99.35));
                    
            echo "<table border=\"1\">";
            echo "<thead><tr><td>Producto</td><td>Descripcion</td><td>Precio</td></tr></thead>";
            
                foreach ($productos as $key => $p) {
                    if ($p[2] > 10) {
                        echo "<tr>";
                        echo "<td>" . $p[0] . $key . "</td>";
                        echo "<td>" . $p[1] . $key . "</td>";
                        echo "<td>" . $p[2] . "</td>";
                        echo "</tr>";
                    }
                 }
            echo  "</table>";

            $productos = array( 1 => array("SMART WATCH-300", "imagenes/imagen1.jpg", "mart Watch Bluetooth* con pantalla touch","$42.00", "$39.90"),
                                2 => array("SMART WATCH-200", "imagenes/imagen2.jpg","Smart Watch Bluetooth* con pantalla Full Touch", "$37.00", "$35.00"),
                                3 => array("SMART WATCH-100", "imagenes/imagen3.jpg","SportBand Bluetooth", "$20.00","$18.99"),
                                4 => array("PRO-300", "imagenes/imagen4.jpg","Proyector multimedia HD de 7000 lúmenes, portátil"," $122.99", "$115.00"),
                                5 => array("PRO-230", "imagenes/imagen5.jpg","Mini proyector multimedia de 2800 lúmenes, portátil", "$130.99", "$120.00"),
                                6 => array("PRO-400", "imagenes/imagen6.jpg","Proyector multimedia Full HD de 9 000 lúmenes, portátil", "$219.99", "$202.99"),
                                7 => array("NB-900", "imagenes/voltaje1.jpg","UPS de hasta 85 min de respaldo, 900 VA", "$134.99", "$130.99"),
                                8 => array("REG-1050", "imagenes/voltaje2.jpg","Regulador de voltaje 1,000 W con 8 contactos", "$32.99", "$30.00"),
                                9 => array("NB-050", "imagenes/voltaje3.jpg","Mini No Break (UPS) para módem", "$36.99", "$34.99"),);
                   
                    
                    
                    echo "<table border=\"1\">";
                    echo "<thead><tr><td>Producto</td><td>Imagen</td><td>Descripcion</td><td>Precio</td><td>Precio de Oferta</td></tr></thead>";
                    
                        foreach ($productos as $key => $p) {
                            if ($p[2] > 9) {
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

?>