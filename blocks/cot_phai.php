
<!-- box cat -->
<?php 
    $idLT = 5;
    $tinmoinhat_theoloaitin_mottin= TinMoiNhat_TheoLoaiTin_MotTin($idLT);
    $row_tinmoinhat_theoloaitin_mottin = mysql_fetch_array($tinmoinhat_theoloaitin_mottin);
    $tenLT = TenLoaiTin($idLT);
     ?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#"><?php echo $tenLT ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col1">
            	<div class="news">
                <h3 class="title" ><a href="chitiet/<?php echo $row_tinmoinhat_theoloaitin_mottin['idTin'] ?>-<?php echo $row_tinmoinhat_theoloaitin_mottin['TieuDe_KhongDau']?>"> <?php echo $row_tinmoinhat_theoloaitin_mottin['TieuDe'] ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat_theoloaitin_mottin['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat_theoloaitin_mottin['TomTat'] ?> </div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>
            <div class="col2">
            <?php 
            $soTin = 6;
            $tinmoinhat_theoloaitin_batin= TinMoiNhat_TheoLoaiTin_NhieuTin($idLT,$soTin);
                while ($row_tinmoinhat_theoloaitin_batin = mysql_fetch_array($tinmoinhat_theoloaitin_batin)) { 
             ?>
           <h3 class="tlq"><a href="chitiet/<?php echo $row_tinmoinhat_theoloaitin_batin['idTin'] ?>-<?php echo $row_tinmoinhat_theoloaitin_batin['TieuDe_KhongDau']?>"><?php echo $row_tinmoinhat_theoloaitin_batin['TieuDe'] ?></a></h3>
           <?php 
                }
            ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php 
    $idLT = 6;
    $tinmoinhat_theoloaitin_mottin= TinMoiNhat_TheoLoaiTin_MotTin($idLT);
    $row_tinmoinhat_theoloaitin_mottin = mysql_fetch_array($tinmoinhat_theoloaitin_mottin);
    $tenLT = TenLoaiTin($idLT);
     ?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#"><?php echo $tenLT ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="chitiet/<?php echo $row_tinmoinhat_theoloaitin_mottin['idTin'] ?>-<?php echo $row_tinmoinhat_theoloaitin_mottin['TieuDe_KhongDau']?>"> <?php echo $row_tinmoinhat_theoloaitin_mottin['TieuDe'] ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat_theoloaitin_mottin['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat_theoloaitin_mottin['TomTat'] ?> </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
            <?php 
            $soTin = 6;
            $tinmoinhat_theoloaitin_batin= TinMoiNhat_TheoLoaiTin_NhieuTin($idLT,$soTin);
                while ($row_tinmoinhat_theoloaitin_batin = mysql_fetch_array($tinmoinhat_theoloaitin_batin)) { 
             ?>
           <h3 class="tlq"><a href="chitiet/<?php echo $row_tinmoinhat_theoloaitin_batin['idTin'] ?>-<?php echo $row_tinmoinhat_theoloaitin_batin['TieuDe_KhongDau']?>"><?php echo $row_tinmoinhat_theoloaitin_batin['TieuDe'] ?></a></h3>
           <?php 
                }
            ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
<!-- box cat -->
<?php 
    $idLT = 16;
    $tinmoinhat_theoloaitin_mottin= TinMoiNhat_TheoLoaiTin_MotTin($idLT);
    $row_tinmoinhat_theoloaitin_mottin = mysql_fetch_array($tinmoinhat_theoloaitin_mottin);
    $tenLT = TenLoaiTin($idLT);
     ?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">
            <a href="#"><?php echo $tenLT ?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
            <div class="col1">
                <div class="news">
                <h3 class="title" ><a href="chitiet/<?php echo $row_tinmoinhat_theoloaitin_mottin['idTin'] ?>-<?php echo $row_tinmoinhat_theoloaitin_mottin['TieuDe_KhongDau']?>"> <?php echo $row_tinmoinhat_theoloaitin_mottin['TieuDe'] ?> </a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat_theoloaitin_mottin['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat_theoloaitin_mottin['TomTat'] ?> </div>
                  
                  
                    <div class="clear"></div>
                   
                </div>
            </div>
            <div class="col2">
            <?php 
            $soTin = 6;
            $tinmoinhat_theoloaitin_batin= TinMoiNhat_TheoLoaiTin_NhieuTin($idLT,$soTin);
                while ($row_tinmoinhat_theoloaitin_batin = mysql_fetch_array($tinmoinhat_theoloaitin_batin)) { 
             ?>
           <h3 class="tlq"><a href="chitiet/<?php echo $row_tinmoinhat_theoloaitin_batin['idTin'] ?>-<?php echo $row_tinmoinhat_theoloaitin_batin['TieuDe_KhongDau']?>"><?php echo $row_tinmoinhat_theoloaitin_batin['TieuDe'] ?></a></h3>
           <?php 
                }
            ?>
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->
