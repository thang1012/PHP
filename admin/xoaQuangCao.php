<?php 
require "../lib/dbCon.php";
require "../lib/quantri.php";
$idQC = $_GET["idQC"];settype($idQC, "int");
Xoa_QuangCao($idQC);
header("location:listQuangCao.php");
 ?>