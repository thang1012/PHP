<?php 
if(isset($_GET["idLT"])){
    $idLT = $_GET["idLT"];
    settype($idLT , "int");
}
    else
    $idLT ="";
 ?>
<div id="linkref" style="font-size: 12px; font-weight: bold;">
 <a href="index.php">Trang chủ</a> >> 
 <a href=""><?php echo TenTheLoai_theo_LoaiTin($idLT) ?></a> >>
 <?php echo TenLoaiTin($idLT) ?>   
</div>
<?php 
if(isset($_GET["trang"]))
{
    $sotrang = $_GET["trang"];
    settype($sotrang, "int");
}
else
 {  $sotrang = 1;  }
$soTinTrang = 4;
$start =( $sotrang - 1 )*$soTinTrang;
$tin_theo_theloai = Tin_Theo_Loai_PhanTrang($idLT,$start,$soTinTrang);
 while ($row_tin_theo_TheLoai = mysql_fetch_array($tin_theo_theloai)) {
 ?>
<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="chitiet/<?php echo $row_tin_theo_TheLoai['idTin'] ?>-<?php echo $row_tin_theo_TheLoai['TieuDe_KhongDau']?>"><?php echo $row_tin_theo_TheLoai['TieuDe'] ?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tin_theo_TheLoai['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tin_theo_TheLoai['TomTat'] ?></div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            
        </div>
    </div>
</div>
<div class="clear"></div>
<?php 
}
 ?>
<hr>
<style type="text/css">
    #phantrang{text-align: center;}
    #phantrang a{background-color: green; color: yellow; padding: 2px 6px;font-size: 15px; border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;}
</style>
<div id="phantrang">
<?php 
$t = Tin_Theo_Loai($idLT);
$chitietLoaiTin = ChiTietLoaiTin($idLT);
$tongtin = mysql_num_rows($t);
$tongSoTrang = round($tongtin / $soTinTrang);
for ($i=1; $i <= $tongSoTrang ; $i++) { 
   
 ?>
<a href="loaitin/<?php echo $i ?>/<?php echo $idLT ?>-<?php echo $chitietLoaiTin["Ten_KhongDau"] ?>" <?php if($sotrang == $i){ echo "style='background-color:red' "; } ?>><?php echo $i ?></a>

<?php } ?>

</div>