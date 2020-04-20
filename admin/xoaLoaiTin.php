<?php 
require "../lib/dbCon.php";
require "../lib/quantri.php";
$idLT = $_GET["idLT"];
Xoa_LoaiTin($idLT);
header("location:listLoaiTin.php");
 ?>