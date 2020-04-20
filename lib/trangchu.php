<?php 

function TinMoiNhat_MotTin()
{
	$qr = "
		SELECT * FROM tin
		ORDER BY idTin DESC
		LIMIT 0,1
	";
	return mysql_query($qr);
}
function TinMoiNhat_BonTin()
{
	$qr = "
		SELECT * FROM tin
		ORDER BY idTin DESC
		LIMIT 1,6
	";
	return mysql_query($qr);
}
function TinXemNhieu()
{
	$qr = "
		SELECT * FROM tin ORDER BY SoLanXem DESC LIMIT 0,6
	";
	return mysql_query($qr);
}
function TinMoiNhat_TheoLoaiTin_MotTin($idLT)
{
	$qr = "
		SELECT * FROM tin where idLT = $idLT order by idTin DESC LIMIT 0,1
	";
	return mysql_query($qr);
}
function TinMoiNhat_TheoLoaiTin_NhieuTin($idLT,$soTin)
{
	 $qr = "
		SELECT * FROM tin where idLT = $idLT order by idTin DESC LIMIT 1,$soTin
	";
	return mysql_query($qr);
}
function TenLoaiTin($idLT)
{

	$query ="
		SELECT Ten FROM loaitin WHERE idLT = $idLT;
	";
	$tenLT = mysql_query($query);
    $row_tenLT = mysql_fetch_array($tenLT);
	return $row_tenLT['Ten'];
}
function TenTheLoai_theo_LoaiTin($idLT)
{

	$query ="
		SELECT TenTL FROM theloai WHERE idTL = (SELECT idTL FROM loaitin WHERE idLT = $idLT);
	";
	$tenTL = mysql_query($query);
    $row_tenTL = mysql_fetch_array($tenTL);
	return $row_tenTL['TenTL'];
}
function quangcao_TopPhai($vitri)
{
	$query = "
		select * from quangcao where vitri = $vitri
	";
	return mysql_query($query);

}
function quangcao_ThongTinDoanhNghiep($vitri)
{
	$query = "
		select * from quangcao where vitri = $vitri
	";
	return mysql_query($query);

}
function DSTheLoai()
{
	$query = "
		select * from theloai order by idTL desc
	";
	return mysql_query($query);

}
function LoaiTin_Theo_TheLoai($idTL)
{
	$query = "
		select * from loaitin where idTL = $idTL
	";
	return mysql_query($query);

}

function Tin_Theo_Loai($idLT)
{
	$query = "
		select tin.*, loaitin.Ten_KhongDau from tin join loaitin on tin.idLT = loaitin.idLT where tin.idLT = '$idLT'
		order by tin.idTin DESC
	";
	return mysql_query($query);

}
function TinCungLoai($idTin,$idLT)
{
	$query = "
		select tin.*, loaitin.Ten_KhongDau from tin join loaitin on tin.idLT = loaitin.idLT where tin.idTin <> $idTin AND loaitin.idLT = $idLT 
		order by rand()
		limit 0,3
	";
	return mysql_query($query);

}
function Tin_Theo_Loai_PhanTrang($idLT,$start,$soTinTrang)
{
	$query = "
		select tin.*, loaitin.Ten_KhongDau from tin join loaitin on tin.idLT = loaitin.idLT where tin.idLT = '$idLT'
		order by tin.idTin DESC
		limit $start,$soTinTrang
	";
	return mysql_query($query);

}
function ChiTietTin($idTin)
{
	$query = "
		select * from tin where idTin = $idTin
	";
	return mysql_query($query);

}
function ChiTietLoaiTin($idLT)
{
	$query = "
		select * from loaitin where idLT = $idLT
	";
	$row = mysql_query($query);
	return mysql_fetch_array($row);

}
function CapNhatSoLanXem($idTin)
{
	$query = "
		update tin set SoLanXem = SoLanXem + 1
		where idTin = $idTin
	";
	mysql_query($query);
}
function TimKiem($keywords)
{
	$query = "
		select * from tin where TieuDe regexp '$keywords'
		order by idTin DESC
	";
	return mysql_query($query);

}



 ?>