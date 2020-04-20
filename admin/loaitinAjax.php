<?php 
require "../lib/trangchu.php";
require "../lib/dbCon.php";
$idTL = $_GET["idTL"];
$row_LT = LoaiTin_Theo_TheLoai($idTL);
while ($row = mysql_fetch_array($row_LT )) {
 ?>
 	<option value="<?php echo $row["idLT"] ?> "><?php echo $row["Ten"] ?></option>
 <?php 
}
 ?>
