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
if (isset($_POST["btnThem"])) {
	$vitri = $_POST["vitri"];settype($SolanClick,"int");
	$MoTa = $_POST["MoTa"];
	$Url = $_POST["Url"];
	$urlHinh = $_POST["urlHinh"];
	$SolanClick = $_POST["SolanClick"];settype($SolanClick,"int");
	Them_QuangCao($vitri,$MoTa,$Url,$urlHinh,$SolanClick);
	header("location:listQuangCao.php");
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
						<td colspan="2"> THÊM QUẢNG CÁO</td>
						</tr >
					<tr>
						<td>Vị trí</td>
						<td>
							<input type="radio" checked id="top" name="vitri" value="1"><label for="Hien">Top</label>
							<input type="radio" id="bottom" name="vitri" value="2"><label for="An">Bottom</label>
						</td>
					</tr>
					<tr>
						<td>Mô tả</td>
						<td><input type="text" id="MoTa" name="MoTa"></td>
					</tr>
					<tr>
						<td>Url</td>
						<td><input type="text" id="Url" name="Url"></td>
					</tr><tr>
						<td>Hình ảnh</td>
						<td><input type="text" id="urlHinh" name="urlHinh"></td>
					</tr>
					</tr><tr>
						<td>Số lần Click</td>
						<td><input type="text" id="SoLanClick" name="SoLanClick"></td>
					</tr>
					<tr>
						<td></td>
						<td><button name="btnThem">Thêm</button></td>
					</tr>
				</table>

			</form>
			
</body>
</html>