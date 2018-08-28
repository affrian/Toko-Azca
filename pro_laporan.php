
<?php 
date_default_timezone_set("asia/jakarta");
include_once("koneksi.php");
$cs=$_GET['cs'];
switch ($cs) {

	case'ambil_ktg':
	 		$lpr_ktg_nama=$_GET['lpr_ktg_nama'];
	 		$sql=mysql_query("SELECT * FROM kategori WHERE ktg_nama LIKE '%".$lpr_ktg_nama."%'")or die(mysql_error());
	 		echo"<ul class='hover'>";
				while ($array=mysql_fetch_array($sql)) {
	?>				
				<li id="<?php echo $array['ktg_id']; ?> " onclick="lpr_copy_ktg('<?php echo $array['ktg_id'];?>','<?php echo $array['ktg_nama'];?>')">
				<b><?php echo $array['ktg_nama']; ?></b></li>
	<?php			
				}
			echo"</ul>";
	 		break;

	case'ambil_brg':
	 		$lap_brg_nm=$_GET['lap_brg_nm'];
	 		$sql=mysql_query("SELECT * FROM barang WHERE brg_nama LIKE '%".$lap_brg_nm."%'")or die(mysql_error());
	 		echo"<ul class='hover'>";
				while ($array=mysql_fetch_array($sql)) {
	?>				
				<li id="<?php echo $array['brg_id']; ?> " onclick="lpr_copy_brg('<?php echo $array['brg_id'];?>','<?php echo $array['brg_nama'];?>')">
				<b><?php echo $array['brg_nama']; ?></b></li>
	<?php			
				}
			echo"</ul>";
	 		break;
}

 ?>
