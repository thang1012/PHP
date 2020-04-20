
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
			<table  width="900px" align="center" border="1" cellpadding="0" cellspacing="0" style="
    margin-top: 10px;
">
				<tr class="hangtieude1">
					<td  colspan="7">DANH SÁCH TIN</td>
				</tr>
				<tr class="hangtieude2">
					<td colspan="4"></td>
					<td><a href="themTin.php">Thêm</a></td>
				</tr >
				<?php 
				$tin = DS_Tin();
				while ($row = mysql_fetch_array($tin)) {
					
				ob_start();
				 ?>
				<tr class="hangchitiet">
					<td>ID {idTin}<br>{Ngay}</td>
					<td style="text-align: left;"><a  href="suaTin.php?idTin={idTin}">{TieuDe}<br></a> <img style="float: left; margin-right: 2px" src="../upload/tintuc/{urlHinh}" alt="anh" width="100px" height="50px"> {TomTat}
						
					</td>
					<td>{Ten}<br>{TenTL}</td>
					<td>{SoLanXem}<br>{TinNoiBat}<br>{AnHien}</td>
					<td><a href="suaTin.php?idTin={idTin}">Sửa</a>-<a onclick="return confirm('Bạn có chắc muốn xóa ?')" href="xoaTin.php?idTin={idTin}">Xóa</a></td>
				</tr>
				<?php 
				$temp = ob_get_clean();
				$temp = str_replace("{idTin}", $row["idTin"], $temp);
				$temp = str_replace("{Ngay}", $row["Ngay"], $temp);
				$temp = str_replace("{TieuDe}", $row["TieuDe"], $temp);
				$temp = str_replace("{urlHinh}", $row["urlHinh"], $temp);
				$temp = str_replace("{TenTL}", $row["TenTL"], $temp);
				$temp = str_replace("{Ten}", $row["Ten"], $temp);
				$temp = str_replace("{TomTat}", $row["TomTat"], $temp);
				$temp = str_replace("{SoLanXem}", $row["SoLanXem"], $temp);
				$temp = str_replace("{TinNoiBat}", $row["TinNoiBat"], $temp);
				$temp = str_replace("{AnHien}", $row["AnHien"], $temp);

				echo $temp;
				}
				 ?>
				
			</table>	
</body>
</html>