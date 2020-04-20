Welcome <?php echo $_SESSION["HoTen"] ?>
<form action="" target="" method="post" id="thoat">
        <button id="btnThoat" name="btnThoat">Thoát</button>
        <button <?php if($_SESSION["idGroup"]==0) { echo "hidden"; } ?> id="quanTri" name="quanTri"><a href="admin/index.php">Quản Trị</a></button>
</form>