
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
					<td  colspan="7">DANH SÁCH LOẠI TIN</td>
				</tr>
				<tr class="hangtieude2">
					<td>ID</td>
					<td>Tên Thể Loại</td>
					<td>Tên không dấu</td>
					<td>Thứ tự</td>
					<td>Ẩn/hiện</td>
					<td>Thể Loại</td>
					<td><a href="themLoaiTin.php">Thêm</a></td>
				</tr >
				<?php 
				$loaitin = DS_LoaiTin();
				while ( $row_loaitin = mysql_fetch_array($loaitin)) {
					ob_start();
				 ?>
				<tr class="hangchitiet">
					<td>{idLT}</td>
					<td>{Ten}</td>
					<td>{Ten_KhongDau}</td>
					<td>{ThuTu}</td>
					<td>{AnHien}</td>
					<td>{idTL}</td>
					<td><a href="suaLoaiTin.php?idLT={idLT}">Sửa</a>-<a onclick="return confirm('Bạn có chắc muốn xóa ?')" href="xoaLoaiTin.php?idLT={idLT}">Xóa</a></td>
				</tr>
				<?php 
					$temp = ob_get_clean();
					$temp = str_replace("{idLT}", $row_loaitin["idLT"], $temp);
					$temp = str_replace("{Ten}", $row_loaitin["Ten"], $temp);
					$temp = str_replace("{Ten_KhongDau}", $row_loaitin["Ten_KhongDau"], $temp);
					$temp = str_replace("{ThuTu}", $row_loaitin["ThuTu"], $temp);
					$temp = str_replace("{AnHien}", $row_loaitin["AnHien"], $temp);
					$temp = str_replace("{idTL}", $row_loaitin["TenTL"], $temp);
					echo $temp;
				}						
				 ?>
			</table>	
</body>
</html>