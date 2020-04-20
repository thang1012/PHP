
<?php 
$quangcao_topphai = quangcao_TopPhai(1);
while ($row_qc_topphai = mysql_fetch_array($quangcao_topphai)){
 ?>
 <a href="<?php echo $row_qc_topphai['Url'] ?>">
<img width="280" src="upload/quangcao/<?php echo $row_qc_topphai['urlHinh'] ?> " />
<div style="height:10px"></div>
</a>
<?php 
}
 ?>