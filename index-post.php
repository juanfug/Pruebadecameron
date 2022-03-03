<?php
include 'conexion.php';

$nom = $_POST["nom"];
$ciu = $_POST["ciu"];
$num = $_POST["num"];
$dir = $_POST["dir"];
$nit = $_POST["nit"];

$sql = "insert into hotel values(default, '$nom','$ciu','$num','$dir','$nit')";

header("location:index.php");
?>