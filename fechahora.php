<?php
header("Content-type:aplication/json");
$fechahora=date('Y-m-d H:i:s');
echo json_encode($fechahora);
?>