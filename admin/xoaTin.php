<?php 
require "../lib/dbCon.php";
require "../lib/quantri.php";
$idTin = $_GET["idTin"];
Xoa_Tin($idTin);
header("location:listTin.php");
 ?>