
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
			<table id="tbListTheLoai" width="800px" align="center" border="1" cellpadding="0" cellspacing="0" style="
    margin-top: 10px;
">
				<tr class="hangtieude1">
					<td  colspan="6">DANH SÁCH THỂ LOẠI</td>
				</tr>
				<tr class="hangtieude2">
					<td>ID</td>
					<td>Tên Thể Loại</td>
					<td>Tên không dấu</td>
					<td>Thứ Tự</td>
					<td>Ẩn/Hiện</td>
					<td><a href="themTheLoai.php">Thêm</a></td>
				</tr >
				<?php 
				$theloai = DS_TheLoai();
				while ( $row_theloai = mysql_fetch_array($theloai)) {
					ob_start();
				 ?>
				<tr class="hangchitiet">
					<td>{idTL}</td>
					<td>{TenTL}</td>
					<td>{TenTL_KhongDau}</td>
					<td>{ThuTu}</td>
					<td>{AnHien}</td>
					<td><a href="suaTheLoai.php?idTL={idTL}">Sửa</a>-<a onclick="return confirm('Bạn có chắc muốn xóa ?')" href="xoaTheLoai.php?idTL={idTL}">Xóa</a></td>
				</tr>
				<?php 
					$temp = ob_get_clean();
					$temp = str_replace("{idTL}", $row_theloai["idTL"], $temp);
					$temp = str_replace("{TenTL}", $row_theloai["TenTL"], $temp);
					$temp = str_replace("{TenTL_KhongDau}", $row_theloai["TenTL_KhongDau"], $temp);
					$temp = str_replace("{ThuTu}", $row_theloai["ThuTu"], $temp);
					$temp = str_replace("{AnHien}", $row_theloai["AnHien"], $temp);
					echo $temp;
				}						
				 ?>
			</table>	
</body>
</html>