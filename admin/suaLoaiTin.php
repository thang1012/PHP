<?php 
ob_start();
session_start();

if (!isset($_SESSION["idUser"]) && $_SESSION["idGroup"] != 1) {
	header("location:../index.php");
}
 ?>
<?php 
	require "../lib/dbCon.php";
	require "../lib/quantri.php";
 ?>
<?php 
  $idLT = $_GET["idLT"];
  $row_LT = LoaiTin_theo_ID($idLT);

 ?>

 <?php 
if (isset($_POST["btnSua"])) {
	
	$tenLT = $_POST["txtTenLT"];
	$ten_khong_dau = changeTitle($tenLT);
	$ThuTu = $_POST["txtThuTu"];settype($ThuTu, "int");
	$AnHien = $_POST["AnHien"];settype($AnHien, "int");
	$idTL = $_POST["idTL"];settype($idTL, "int");
	Sua_LoaiTin($idLT,$tenLT,$ten_khong_dau,$ThuTu,$AnHien,$idTL);
	header("location:listLoaiTin.php");
}
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quan tri</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
			<table id="tbmain">
				<tr class="hangtieudeQuanTri">
					<td><div id="tieudequantri">TRANG QUẢN TRỊ</div>
						<div style="width: 200px; float: right;"> Login: <?php echo $_SESSION["HoTen"]?></div>
					</td>
				</tr>
				<tr id="hangmenu">
					<td ><?php require "menu.php" ?></td>
				</tr>
			</table>	
			<form action="" method="post" target="">
				
				<table width="600px" cellspacing="0" cellpadding="0" border="1" align="center" style="margin-top: 10px">
					<tr >
						<td colspan="2"> SỬA THÊM LOẠI TIN</td>
						</tr >
					<tr>
						<td>TenTL</td>
						<td><input type="text" id="" name="txtTenLT" value="<?php echo $row_LT["Ten"] ?>"></td>
					</tr >
					<tr>
						<td>ThuTu</td>
						<td><input type="text" id="" name="txtThuTu" value="<?php echo $row_LT["ThuTu"] ?>"></td>
					</tr>
					<tr>
						<td>AnHien</td>
						<td>
							<input type="radio" <?php if($row_LT["AnHien"] == 1 ) { echo "checked"; } ?> id="Hien" name="AnHien" value="1"><label for="Hien">Hiện</label>
							<input type="radio" <?php if($row_LT["AnHien"] == 0 ) { echo "checked"; } ?> id="An" name="AnHien" value="0"><label for="An">Ẩn</label>
						</td>
					</tr>
					<tr>
						<td>idTL</td>
						<td>
								<select name="idTL" id="idTL">
									<?php 
									$list_theloai = DS_TheLoai();
									while ($row = mysql_fetch_array($list_theloai)) {
									?>
			<option <?php if($row["idTL"] == $row_LT["idTL"]){echo 'selected';} ?> value="<?php echo $row["idTL"] ?>"><?php echo $row["TenTL"] ?></option>			
							<?php	
								}
							 ?>
									
								</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><button name="btnSua">Sửa</button></td>
					</tr>
				</table>

			</form>
			
</body>
</html>