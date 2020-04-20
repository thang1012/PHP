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
 $idQC = $_GET["idQC"];
 $row_QC = QuangCao_theo_ID($idQC);
  ?>

 <?php 
if (isset($_POST["btnSua"])) {
	$vitri = $_POST["vitri"];
	$MoTa = $_POST["MoTa"];
	$Url = $_POST["Url"];
	$urlHinh = $_POST["urlHinh"];
	$SoLanClick = $_POST["SoLanClick"];settype($SoLanClick,"int");
	Sua_QuangCao($idQC,$vitri,$MoTa,$Url,$urlHinh,$SoLanClick);
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
						<td colspan="2"> SỬA QUẢNG CÁO</td>
						</tr >
					<tr>
						<td>Vị trí</td>
						<td>
							<input type="radio" <?php if($row_QC["vitri"] == 1) echo 'checked'; ?> id="top" name="vitri" value="1"><label for="Hien">Top</label>
							<input type="radio" <?php if($row_QC["vitri"] == 2) echo 'checked'; ?> id="bottom" name="vitri" value="2"><label for="An">Bottom</label>
						</td>
					</tr>
					<tr>
						<td>Mô tả</td>
						<td><input type="text" id="MoTa" name="MoTa" value="<?php echo $row_QC["MoTa"] ?>"></td>
					</tr>
					<tr>
						<td>Url</td>
						<td><input type="text" id="Url" name="Url" value="<?php echo $row_QC["Url"] ?>"></td>
					</tr><tr>
						<td>Hình ảnh</td>
						<td><input type="text" id="urlHinh" name="urlHinh" value="<?php echo $row_QC["urlHinh"] ?>"></td>
					</tr>
					</tr><tr>
						<td>Số lần Click</td>
						<td><input type="text" id="SoLanClick" name="SoLanClick" value="<?php echo $row_QC["SoLanClick"] ?> "></td>
					</tr>
					<tr>
						<td></td>
						<td><button name="btnSua">SỬA</button></td>
					</tr>
				</table>

			</form>
			
</body>
</html>