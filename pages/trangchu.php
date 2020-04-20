<?php 
            $theloai = DSTheLoai();
            while ($row_TheLoai = mysql_fetch_array($theloai)) {
                $idTL =   $row_TheLoai['idTL'];
             ?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">         
        	<a href="#"><?php echo $row_TheLoai['TenTL'] ?></a>
        </div>
        <div class="child-cat">
        <?php 
            $loaitin = LoaiTin_Theo_TheLoai($idTL);
            while ( $row_loaitin = mysql_fetch_array($loaitin)) {
                    $idLT = $row_loaitin['idLT'];
         ?>         
            <a href="loaitin/1/<?php echo $row_loaitin['idLT'] ?>-<?php echo $row_loaitin['Ten_KhongDau'] ?>"><?php echo $row_loaitin['Ten'] ?></a>
        <?php 
            }
         ?>
        </div>
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                    <?php 
                        $tin_moinhat_theloai = TinMoiNhat_TheoLoaiTin_MotTin($idLT);
                        $row_tin_moinhat_theloai = mysql_fetch_array($tin_moinhat_theloai);
                     ?>
                    <h3 class="title" ><a href="chitiet/<?php echo $row_tin_moinhat_theloai['idTin'] ?>-<?php echo $row_tin_moinhat_theloai['TieuDe_KhongDau'] ?>"><?php echo $row_tin_moinhat_theloai['TieuDe'] ?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tin_moinhat_theloai['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tin_moinhat_theloai['TomTat'] ?> </div>
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
                <?php 
                $tinmoinhat_theoloaitin_nhieutin = TinMoiNhat_TheoLoaiTin_NhieuTin($idLT,2);
                while ($row_tinmoinhat_theoloaitin_nhieutin = mysql_fetch_array($tinmoinhat_theoloaitin_nhieutin)) {
   
                 ?>
             <p class="tlq"><a href="#"> <?php echo $row_tinmoinhat_theoloaitin_nhieutin['TieuDe'] ?> </a>
                </a></p>
               <?php 
           }
                ?>
            </div>    
        </div>
    </div>
</div>
<div class="clear"></div>
<?php 
    }
?>





