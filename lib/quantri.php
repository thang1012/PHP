<?php
// -------------------------------------------------------QUẢN LÍ THỂ LOẠI
function DS_TheLoai()
{
	$query = "
		select * from theloai 
		order by idTL desc
	";
	return mysql_query($query);
}
function TheLoai_theo_ID($idTL)
{
	$query = "
		select * from theloai 
		where idTL = $idTL
	";
	$row = mysql_query($query);
	return mysql_fetch_array($row);
}
function Them_TheLoai($tenTL,$khong_dau,$thuTu,$anHien)
{

$query= "
	insert into theloai value (null,'$tenTL','$khong_dau','$thuTu','$anHien')
	";
mysql_query($query);
}
function Sua_TheLoai($idTL,$tenTL,$khong_dau,$thuTu,$anHien)
{
$query= "
	update theloai set TenTL = '$tenTL', TenTL_KhongDau= '$khong_dau',ThuTu = '$thuTu', AnHien = '$anHien'
	where idTL = '$idTL'
	";
     mysql_query($query);
}
function Xoa_TheLoai($idTL)
{

$query= "
	delete from theloai where idTL = $idTL
	";
mysql_query($query);
}
//----------------------------------------------------QUẢN LÍ LOẠI TIN
function DS_LoaiTin()
{
	$query = "
		select * from theloai join loaitin on theloai.idTL = loaitin.idTL 
		order by idLT DESC
	";
	return mysql_query($query);
}
function LoaiTin_theo_ID($idLT)
{
	$query = "
		select loaitin.*, TenTL from loaitin join theloai on theloai.idTL = loaitin.idTL
		where loaitin.idLT = $idLT
	";
	$row = mysql_query($query);
	return mysql_fetch_array($row);
}
function Them_LoaiTin($tenTL,$khong_dau,$thuTu,$anHien,$idTL)
{

$query= "
	insert into loaitin value (null,'$tenTL','$khong_dau','$thuTu','$anHien','$idTL')
	";
mysql_query($query);
}
function Sua_LoaiTin($idLT,$tenLT,$khong_dau,$thuTu,$anHien,$idTL)
{
$query= "
	update loaitin set Ten = '$tenLT', Ten_KhongDau= '$khong_dau',ThuTu = '$thuTu', AnHien = '$anHien',idTL = $idTL
	where idLT = '$idLT'
	";
     mysql_query($query);
}
function Xoa_LoaiTin($idLT)
{

$query= "
	delete from loaitin where idLT = $idLT
	";
mysql_query($query);
}
// ----------------------------------------------------QUẢN LÝ TIN
function DS_Tin()
{
	$query = "
		select tin.*,Ten,TenTL from tin join loaitin on tin.idLT = loaitin.idLT join theloai on tin.idTL = theloai.idTL order by idTin DESC
		limit 0,40
	";
	return mysql_query($query);
}
function Tin_theo_ID($idTin)
{
	$query = "
		select tin.*,Ten,TenTL from tin join loaitin on tin.idLT = loaitin.idLT join theloai on tin.idTL = theloai.idTL 
		where tin.idTin = $idTin
		order by idTin DESC
	";
	$row = mysql_query($query);
	return mysql_fetch_array($row);
}
function Them_Tin($tieude,$khong_dau,$tomtat,$urlhinh,$ngay,$idUser,$content,$idLT,$idTL,$solanxem,$tinnoibat,$anhien)
{

$query= "
	insert into tin value (null,'$tieude','$khong_dau','$tomtat','$urlhinh','$ngay','$idUser','$content','$idLT','$idTL','$solanxem','$tinnoibat','$anhien')
	";
mysql_query($query);
}
function Sua_Tin($idTin,$TieuDe,$TieuDe_KhongDau,$TomTat,$urlHinh,$Ngay,$idUser,$Content,$idLT,$idTL,$SoLanXem,$TinNoiBat,$AnHien)
{
$query= "
	update tin set TieuDe = '$TieuDe', TieuDe_KhongDau= '$TieuDe_KhongDau',TomTat = '$TomTat', urlHinh = '$urlHinh', Ngay = '$Ngay', idUser = '$idUser', Content = '$Content', idLT = '$idLT', idTL = '$idTL', SoLanXem = '$SoLanXem', TinNoiBat = '$TinNoiBat', AnHien = '$AnHien'
	where idTin = '$idTin'
	";
     mysql_query($query);
}
function Xoa_Tin($idTin)
{

$query= "
	delete from tin where idTin = $idTin
	";
mysql_query($query);
}
// -------------------------------------------------------QUẢN LÍ QUẢNG CÁO
function DS_QuangCao()
{
	$query = "
		select * from quangcao 
		order by idQC desc
	";
	return mysql_query($query);
}
function QuangCao_theo_ID($idQC)
{
	$query = "
		select * from quangcao 
		where idQC = $idQC
	";
	$row = mysql_query($query);
	return mysql_fetch_array($row);
}
function Them_QuangCao($vitri,$MoTa,$Url,$urlHinh,$SolanClick)
{

$query= "
	insert into quangcao value (null,'$vitri','$MoTa','$Url','$urlHinh',$SolanClick)
	";
mysql_query($query);
}
function Sua_QuangCao($idQC,$vitri,$MoTa,$Url,$urlHinh,$SolanClick)
{
$query= "
	update quangcao set vitri = '$vitri', MoTa= '$MoTa',Url = '$Url', urlHinh = '$urlHinh',SolanClick = '$SolanClick'
	where idQC = '$idQC'
	";
     mysql_query($query);
}
function Xoa_QuangCao($idQC)
{

$query= "
	delete from quangcao where idQC = $idQC
	";
mysql_query($query);
}
//-----------------------
function stripUnicode($str){
  if(!$str) return false;
   $unicode = array(
     'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
     'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
     'd'=>'đ',
     'D'=>'Đ',
	  'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
	  'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
	  'i'=>'í|ì|ỉ|ĩ|ị',	  
	  'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
     'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
	  'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
     'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
	  'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
     'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
     'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
   );
foreach($unicode as $khongdau=>$codau) {
	$arr=explode("|",$codau);
	$str = str_replace($arr,$khongdau,$str);
}
return $str;
}
function changeTitle($str){
	$str=trim($str);
	if ($str=="") return "";
	$str =str_replace('"','',$str);
	$str =str_replace("'",'',$str);
	$str = stripUnicode($str);
	$str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');
	
	// MB_CASE_UPPER / MB_CASE_TITLE / MB_CASE_LOWER
	$str = str_replace(' ','-',$str);
	return $str;
}
  ?>