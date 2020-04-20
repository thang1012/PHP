<?php 
require "../lib/dbCon.php";
require "../lib/quantri.php";
$idTL = $_GET["idTL"];
Xoa_TheLoai($idTL);
header("location:listTheLoai.php");
 ?>