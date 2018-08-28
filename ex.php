<?php 
ob_start();
include_once("koneksi.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Laporan Barang|Azca House Oline</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
	
	<link rel="stylesheet" href="assets/css/lap_style.css" />
</head>
<body>

	<?php 
		$lpr_ktg_id=$_GET['lpr_ktg_id'];
		$lpr_brg_id=$_GET['lpr_brg_id'];
		
		if($lpr_brg_id!=""){
			$query=mysql_query("SELECT * FROM barang INNER JOIN satuan ON satuan.stn_id=barang.stn_id WHERE barang.brg_id='$lpr_brg_id'")or die(mysql_error());
		}elseif($lpr_ktg_id!=""){
			$query=mysql_query("SELECT * FROM barang 
								INNER JOIN satuan ON satuan.stn_id=barang.stn_id 
								INNER JOIN kategori ON kategori.ktg_id=barang.ktg_id 
								WHERE barang.ktg_id='$lpr_ktg_id'")or die(mysql_error());
		}else{
			$query=mysql_query("SELECT * FROM barang INNER JOIN satuan ON satuan.stn_id=barang.stn_id")or die(mysql_error());
		}
	 ?>

	 <table width="100%" style="margin-left: 10px" class="colom">
		<tr>
			<td colspan="2"><p class="center"><img src="img/logo.png" height="150px" width="200px" align="center" /></p></td>
			<td colspan="4"><h2><p class="padding">TOKO AZCA OUSE ONLINE</p></h2>
				<p>Jalan Raya. By Pass Jomin Timur RT 11 Rw.02 <br /> Kec.Kotabaru Kab.Karawang-41374</p>
			</td>
		</tr>
		<tr>
			<td colspan="6"> <hr class="garis" /></td>
		</tr>
		<tr>
			<td colspan="6" class="center"><b>LAPORAN STOK</b></td>
		</tr>
		<tr>
			<td colspan="6"> <hr class="garis" /></td>
		</tr>
	 	<tr>
	 		<td class="center colom warna">No </td>
	 		<td class="center colom warna">Nama Barang</td>
	 		<td class="center colom warna">Satuan</td>
	 		<td class="center colom warna">Harga Beli</td>
	 		<td class="center colom warna">Harga Jual</td>
	 		<td class="center colom warna">Stok</td>
	 	</tr>
	 	<?php 
	 	$no=1;
	 		while($array=mysql_fetch_array($query)){
	 	?>
	 		<tr class="colom">
	 			<td class="colom"><?php echo $no; ?></td>
	 			<td class="colom"><?php echo $array['brg_nama']; ?></td>
	 			<td class="colom"><?php echo $array['stn_nama']; ?></td>
	 			<td class="colom"><?php echo "Rp.".number_format($array['brg_harga_bl'],0,',','.'); ?></td>
	 			<td class="colom"><?php echo "Rp.".number_format($array['brg_harga_jual'],0,',','.'); ?></td>
	 			<td class="colom"><?php echo $array['brg_stok']; ?></td>
	 		</tr>

	 	<?php
	 		$no++;
	 		}
	 	 ?>
	 </table>

</body>
</html>
<?php
$html=ob_get_contents();
ob_end_clean();
        
require_once('assets/html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('Databrg.pdf', 'D');
?>


