
<?php
$tk = $_GET["q"];
settype($tk, "string");
$timkiem = TimKiem($tk);
 while ($row_timkiem = mysql_fetch_array($timkiem)) 
 {
 ?>
<div class="box-cat">
	<div class="cat1">
    	
        <div class="clear"></div>
        <div class="cat-content">
        	<div class="col0 col1">
            	<div class="news">
                    <h3 class="title" ><a href="chitiet/<?php echo $row_timkiem['idTin'] ?>-<?php echo $row_timkiem['TieuDe_KhongDau'] ?>"><?php echo $row_timkiem['TieuDe'] ?> </a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_timkiem['urlHinh'] ?>" align="left" />
                    <div class="des"><?php echo $row_timkiem['TomTat'] ?></div>
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