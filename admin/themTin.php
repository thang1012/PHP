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
	require "../lib/trangchu.php";
 ?>
 <?php 
if (isset($_POST["btnThem"])) {
	$tieude = $_POST["txtTieuDe"];
	$tieude_khong_dau = changeTitle($tieude);
	$tomtat = $_POST["txtTomTat"];
	$urlHinh = $_POST["txturlHinh"];
	$ngay = date("Y/m/d");
	$content = $_POST["txtContent"];
	$idLT = $_POST["idLT"];settype($idLT, "int");
	$idTL = $_POST["idTL"];settype($idTL, "int");
	$id = $_SESSION["idUser"];
	$tinnoibat = $_POST["txtTinNoiBat"];
	$solanxem = 0;
	$anhien = $_POST["AnHien"];settype($anhien, "int");
	Them_Tin($tieude,$tieude_khong_dau,$tomtat,$urlhinh,$ngay,$id,$content,$idLT,$idTL,$solanxem,$tinnoibat,$anhien);
	header("location:listTin.php");
}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quan tri</title>
	<link rel="stylesheet" type="text/css" href="layout.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#idTL").change(function() {
				var id = $(this).val();
				$.get("loaitinAjax.php",{idTL:id},function(data){
						$("#idLT").html(data);
						$("#btnThem").removeAttr('disabled');
				});			
			});
		});
	</script>
<!--------------------------------------------------------------Editor soạn thảo trên input--> 
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
<!-----------------------------------------------------------------------upload ảnh -->
	<script type="text/javascript">
function BrowseServer( startupPath, functionData ){
	var finder = new CKFinder();
	finder.basePath = 'ckfinder/'; //Đường path nơi đặt ckfinder
	finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file
	finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn
	finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình
	//finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn	
	finder.popup(); // Bật cửa sổ CKFinder
} //BrowseServer

function SetFileField( fileUrl, data ){
	document.getElementById( data["selectActionData"] ).value = fileUrl;
}
function ShowThumbnails( fileUrl, data ){	
	var sFileName = this.getSelectedFile().name; // this = CKFinderAPI
	document.getElementById( 'thumbnails' ).innerHTML +=
	'<div class="thumb">' +
	'<img src="' + fileUrl + '" />' +
	'<div class="caption">' +
	'<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +
	'</div>' +
	'</div>';
	document.getElementById( 'preview' ).style.display = "";
	return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn
}
</script>


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
				
				<table id="tbThemTin" width="600px" cellspacing="0" cellpadding="0" border="1" align="center" style="margin-top: 10px">
					<tr >
						<td colspan="2" align="center"> THÊM TIN</td>
						</tr >
					<tr>
						<td>Tiêu đề</td>
						<td><input type="text" id="txtTieuDe" name="txtTieuDe"></td>
					</tr >
					<tr>
						<td>Tóm tắt</td>
						<td><textarea name="txtTomTat" id="txtTomTat" cols="50" rows="2"></textarea></td>
					</tr>
					<tr>
						<td>Hình ảnh</td>
						<td><input type="text" name="txturlHinh"><input onclick="BrowseServer('Images:/','urlHinh')" type="button" name="btnChonFile" id="btnChonFile" value="Chọn file" /></td>
					</tr>
					
					<tr>
						<td>Nội dung</td>
						<td><textarea name="txtContent" id="txtContent" cols="50" rows="5"></textarea>
						<script type="text/javascript">
							var editor = CKEDITOR.replace( 'txtContent',{
								uiColor : '#9AB8F3',
								language:'vi',
								skin:'v2',
								filebrowserImageBrowseUrl : 'ckfinder/ckfinder.html?Type=Images',
								filebrowserFlashBrowseUrl : 'ckfinder/ckfinder.html?Type=Flash',
								filebrowserImageUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
								filebrowserFlashUploadUrl : 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
			 	
								toolbar:[
								['Source','-','Save','NewPage','Preview','-','Templates'],
								['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print'],
								['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
								['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
								['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
								['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
								['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
								['Link','Unlink','Anchor'],
								['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
								['Styles','Format','Font','FontSize'],
								['TextColor','BGColor'],
								['Maximize', 'ShowBlocks','-','About']
								]
							});		
							</script>
						</td>
					</tr>
					<tr>
						<td>Tên Thể Loại</td>
						<td>
								<select name="idTL" id="idTL">
									<?php 
									$list_theloai = DS_TheLoai();
										while ($row = mysql_fetch_array($list_theloai)) {
									?>
									<option value="<?php echo $row["idTL"] ?>"><?php echo $row["TenTL"] ?></option>
									 <?php 
										}
									  ?>
									
								</select>
						</td>
					</tr>
					<tr>
						<td>Tên Loại Tin</td>
						<td>
								<select name="idLT" id="idLT">
									<option value="">Chọn Thể loại</option>
								</select>
						</td>
					</tr>
					
					<tr>
						<td>Tin Nổi Bật</td>
						<td>
							<input type="radio" checked id="BinhThuong" name="txtTinNoiBat" value="0"><label for="BinhThuong">Bình thường</label>
							<input type="radio"  id="NoiBat" name="txtTinNoiBat" value="1"><label for="NoiBat">Nổi bật</label>
						</td>
					</tr>
					<tr>
						<td>Ẩn Hiện</td>
						<td>
							<input type="radio" checked id="Hien" name="AnHien" value="1"><label for="Hien">Hiện</label>
							<input type="radio" id="An" name="AnHien" value="0"><label for="An">Ẩn</label>
						</td>
					</tr>
					
					<tr>
						<td></td>
						<td><button type="button" disabled name="btnThem" id="btnThem">Thêm</button></td>
					</tr>
				</table>

			</form>
		<p id="para"></p>	
</body>
</html>