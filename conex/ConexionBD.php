<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$db = "baseFisioTerapia";
$conexion = new mysqli($servidor,$usuario,$password,$db);
echo "Conenxión exitosa";
?>