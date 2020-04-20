<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
        	<a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">
        	
            <?php 
            $tinxemnhieu = TinXemNhieu();
            while ($row_tinxemnhieu = mysql_fetch_array($tinxemnhieu)) {
            
             ?>
            <div class="col1">
            	<div class="news">
                  <img class="images_news" src="upload/tintuc/<?php echo $row_tinxemnhieu['urlHinh'] ?>"  />
                    <h3 class="title" ><a href="chitiet/<?php echo $row_tinxemnhieu['idTin'] ?>-<?php echo $row_tinxemnhieu['TieuDe_KhongDau']?>"><?php echo $row_tinxemnhieu['TieuDe'] ?></a><span class="hit">20</span></h3>
                    <div class="clear"></div>
				</div>
            </div>
            
            <?php 
            }

             ?>

            
        </div>
    </div>
</div>
<div class="clear"></div>

