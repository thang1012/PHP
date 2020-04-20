
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
					<td  colspan="7">DANH SÁCH QUẢNG CÁO</td>
				</tr>
				<tr class="hangtieude2">
					<td>ID</td>
					<td>Vị trí</td>
					<td>Mô tả</td>
					<td>Url</td>
					<td>Hình ảnh</td>
					<td>Số lần Click</td>
					<td><a href="themQuangCao.php">Thêm</a></td>
				</tr >
				<?php 
				$quangcao = DS_QuangCao();
				while ( $row_quangcao = mysql_fetch_array($quangcao)) {
					ob_start();
				 ?>
				<tr class="hangchitiet">
					<td>{idQC}</td>
					<td>{vitri}</td>
					<td>{MoTa}</td>
					<td>{Url}</td>
					<td>{urlHinh}</td>
					<td>{SoLanClick}</td>
					<td><a href="suaQuangCao.php?idQC={idQC}">Sửa</a>-<a onclick="return confirm('Bạn có chắc muốn xóa ?')" href="xoaQuangCao.php?idQC={idQC}">Xóa</a></td>
				</tr>
				<?php 
					$temp = ob_get_clean();
					$temp = str_replace("{idQC}", $row_quangcao["idQC"], $temp);
					$temp = str_replace("{vitri}", $row_quangcao["vitri"], $temp);
					$temp = str_replace("{MoTa}", $row_quangcao["MoTa"], $temp);
					$temp = str_replace("{Url}", $row_quangcao["Url"], $temp);
					$temp = str_replace("{urlHinh}", $row_quangcao["urlHinh"], $temp);
					$temp = str_replace("{SoLanClick}", $row_quangcao["SoLanClick"], $temp);
					echo $temp;
				}						
				 ?>
			</table>	
</body>
</html>