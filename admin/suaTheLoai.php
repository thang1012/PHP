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
 $idTL = $_GET["idTL"];
 $row_TL = TheLoai_theo_ID($idTL);
  ?>

<?php 
if (isset($_POST["btnSua"])) {
	$tenTL = $_POST["txtTenTL"];
	$ten_khong_dau = changeTitle($tenTL);
	$ThuTu = $_POST["txtThuTu"];settype($ThuTu, "int");
	$AnHien = $_POST["AnHien"];settype($AnHien, "int");
	Sua_TheLoai($idTL,$tenTL,$ten_khong_dau,$ThuTu,$AnHien);
 	header("location:listTheLoai.php");
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
						<td colspan="2"> SỬA THỂ LOẠI</td>
						</tr >
					<tr>
						<td>TenTL</td>
						<td><input type="text" value="<?php echo $row_TL["TenTL"] ?>" name="txtTenTL"></td>
					</tr >
					<tr>
						<td>ThuTu</td>
						<td><input type="text" value="<?php echo $row_TL["ThuTu"] ?>" name="txtThuTu"></td>
					</tr>
					<tr>
						<td>AnHien</td>
						<td>
							<input type="radio" <?php if ($row_TL["AnHien"] == 1){ echo "checked" ;} ?>	
							 id="Hien" name="AnHien" value="1"><label for="Hien">Hiện</label>
							<input type="radio" <?php if ($row_TL["AnHien"] == 0){ echo "checked" ;} ?> id="An" name="AnHien" value="0"><label for="An">Ẩn</label>
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