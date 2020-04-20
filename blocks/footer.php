<div class="thongtin-title">
	<div class="right">
    
          <a href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt VnExpress làm trang chủ</a>
          
          <a href="#"><span class="top">&nbsp;</span>Về đầu trang</a>
       
    </div>
</div>
<div class="thongtin-content">

<?php 
$dstheloai = DSTheLoai();
while ($row_ds_theloai = mysql_fetch_array($dstheloai)) {
  $idTL = $row_ds_theloai['idTL'];

 ?>
	<ul class="ulBlockMenu">
                <li class="liFirst">
                   <h2>
                      <a class="mnu_giaoduc" href="#"><?php echo $row_ds_theloai['TenTL'] ?></a>
                   </h2>
                </li>
                <?php  
                $loaitin = LoaiTin_Theo_TheLoai($idTL);
                  while ($row_loaitin = mysql_fetch_array($loaitin)) {                 
                ?>
                <li class="liFollow">
                   <h2>
                      <a href="loaitin/1/<?php echo $row_loaitin['idLT'] ?>-<?php echo $row_loaitin['Ten_KhongDau'] ?>"><?php echo $row_loaitin['Ten']  ?></a>
                   </h2>
                </li>
                <?php 
                  }
                 ?>
  </ul>
             
           
  <?php 
}
   ?>         
           

</div>




