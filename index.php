<?php
session_start(); 
require "lib/dbCon.php";
require "lib/trangchu.php";
if ( isset($_GET["p"]) || isset($_GET["idTin"]))
   { $p = $_GET["p"];
    }
else
    $p= "";
 ?>
 <?php 
//kiem tra dang nhap
 if (isset($_POST["btnlogin"])) {
    
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $pw = md5($pass);
    $qr = "
    select * from users where Username = '$user'
    and Password = '$pw'
    ";
    $row_user = mysql_query($qr);
    if (mysql_num_rows($row_user) == 1) {
        $row = mysql_fetch_array($row_user);
        $_SESSION["HoTen"] = $row['HoTen'];
        $_SESSION["idUser"] = $row['idUser'];    
        $_SESSION["Username"] = $row['Username'];
        $_SESSION["idGroup"] = $row['idGroup'];
    }
 }
  ?>
<?php 
    
//thoat phien dang nhap
  if(isset($_POST["btnThoat"])){
    unset($_SESSION["HoTen"]);
    unset($_SESSION["idUser"]);
    unset($_SESSION["Username"]);
    unset($_SESSION["idGroup"]);
    header("location:index.php");
}
   ?>  
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="http://localhost:8080/demoPHP/" />
     <!-- <base href="http://thangcrt.byethost5.com/" />  -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lap Trinh PHP - Demo</title>
<link rel="stylesheet" type="text/css" href="css/layout.css" />
</head>

<body>
<div id="wrap-vp">
    <div id="header-vp">
        <div id="logo"><img src="images/logo.gif" /></div>
    </div>
    
    <div id="">
        <!--block/menu.php-->
        <?php 
            require "blocks/menu.php";
         ?>
    </div>
      <div id="midheader-vp">
        <div id="left">
            <ul class="list_arrow_breakumb">
                <li class="start">
                <a href="javascript:;">Trang nhất</a>
                <span class="arrow_breakumb">&nbsp;</span></li>
           </ul>
        </div>
        <div id="right">
            <!--blocks/thongtinchung.php-->
            <?php 
                require "blocks/thongtinchung.php";
             ?>
        </div>
    </div>
    <div class="clear"></div>

    <div id="slide-vp">
        <!--blocks/top_trang_chu.php-->
        <?php 
            require "blocks/top_trang_chu.php";
         ?>
        <div id="slide-right">
        <!--blocks/quangcao_top_phai.php-->
        <?php 
            require "blocks/quangcao_top_phai.php";
         ?>
        </div>
    </div>

    <div id="content-vp">
        <div id="content-left">
        <!--blocks/cot_trai.php--> <?php 
            require "blocks/cot_trai.php";
         ?>
        </div>
        <div id="content-main">
            
            <!--PAGES-->
           <?php 
            switch ($p) {
                case "tintrongloai":
                    require "pages/tintrongloai.php";
                    break;
                case "chitiettin":
                    require "pages/chitiettin.php";
                    break;
                case "timkiem":
                    require "pages/timkiem.php";
                    break;
                default:
                    require "pages/trangchu.php";
            }
            ?>

            
        </div>
        <div id="content-right">
        <!--blocks/cot_phai.php-->

        <?php 

            if (!isset($_SESSION["idUser"])) {    require "blocks/dangnhap.php"; }
            else   { require "blocks/welcome.php"; }
         ?>

        <?php 
            require "blocks/cot_phai.php";
         ?>
        </div>

    <div class="clear"></div>
        
    </div>
    
     <div id="thongtin">
        <!--blocks/thongtindoanhnghiep.php-->
        <?php 
            require "blocks/thongtindoanhnghiep.php";
         ?>
    </div>
    <div class="clear"></div>
    <div id="footer">
        <!--blocks/footer.php-->
        <?php 
            require "blocks/footer.php";
         ?>
        <div class="ft-bot">
            <div class="bot1"><img src="images/logo.gif" /></div>
            <div class="bot2">
                     <p>© <span>Copyright 1997 VnExpress.net,</span>  All rights reserved</p>
                     <p>® VnExpress giữ bản quyền nội dung trên website này.</p>
            </div>
            <div class="bot3">
                
                     <p><a href="http://fptad.net/qc/V/vnexpress/2014/07/">VnExpress tuyển dụng</a>   <a href="http://polyad.net/Polyad/Lien-he.htm">Liên hệ quảng cáo</a> / <a href="/contactus">Liên hệ Tòa soạn</a></p>
                     <p><a href="http://vnexpress.net/contact.htm" target="_blank" style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa soạn: </a><span>0123.888.0123</span> (HN) - <span>0129.233.3555</span> (TP HCM)</p>
                  
            </div>
        </div>
    </div>
</div>

</body>
</html>
