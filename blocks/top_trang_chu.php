<div id="slide-left">
  <?php 
    $tinmoinhat_motin = TinMoiNhat_MotTin();
    $row_tinmoinhat_motin = mysql_fetch_array($tinmoinhat_motin);
    
   ?>
        	<div id="slideleft-main">
             
                <img src="upload/tintuc/<?php echo $row_tinmoinhat_motin['urlHinh']?>"  /><br />
                <h2 class="title"><a href="chitiet/<?php echo $row_tinmoinhat_motin['idTin']?>-<?php echo $row_tinmoinhat_motin['TieuDe_KhongDau']?>"><?php echo $row_tinmoinhat_motin['TieuDe']?></a> </h2>
                <div class="des">
                    <?php echo $row_tinmoinhat_motin['TomTat'] ?>
                </div>
            	
                
        	</div>
            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
              <?php 
                $tinmoinhat_bontin = TinMoiNhat_BonTin();
                while($row_tinmoinhat_bontin = mysql_fetch_array($tinmoinhat_bontin)) {           
               ?>
               <li>
                <div class="title_news">
               	<a href="chitiet/<?php echo $row_tinmoinhat_bontin['idTin']?>-<?php echo $row_tinmoinhat_bontin['TieuDe_KhongDau']?>" class="txt_link"><?php echo $row_tinmoinhat_bontin['TieuDe']?></a> 
                </div>
              </li>
               
              <?php 
                  }
               ?>
            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logo.gif" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     