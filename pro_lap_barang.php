<?php 
	// ob_start();
	include_once("koneksi.php");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Laporan Barang|Azca House Oline</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
	<style>
	.content{
		margin-top: 100px;
		/*border: 1px solid black;*/
		width: 90%;
		margin-left: 5%;
	}
	.batas{
		margin-bottom: 100px;
	}

	.colom{
		border: 1px solid black;
	}
	.center{
		text-align: center;
	}
	.garis{
		border:0px;
		border-top: 3px double #8c8c8c;
	}
	.warna{
		background-color:#D6D5D5;
	}

	.warna2{
		background-color:#FF3232;
		border-radius: 5px;
	}
	.padding{
		letter-spacing: 5px;
	}

	.txt{
		color: white;
	}
	.view{
		border: 1px;
		background-color: #D6D5D5;
		height: auto;
		box-shadow: 10px 10px;
		border-radius: 20px;
	}
	.tebal{
		font-family: "Times New Roman", Times, serif;
	}

	</style>
</head>
<body>

	<?php 
		@$lpr_ktg_id=$_GET['lpr_ktg_id'];
		@$lpr_brg_id=$_GET['lpr_brg_id'];
		
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
	
	 <table width="98%" style="margin-left: 10px;font-size: 12px;margin-left: 1%" class="colom";>
		<tr>
			<td colspan="2"><p class="center"><img src="img/logo.png" height="131" width="153" align="center" /></p></td>
			<td colspan="4"><h2 class="padding" style="font-size: 30px !important;" ><strong>TOKO AZCA</strong></h2>
				<p>Jalan Raya. By Pass Jomin Timur RT 11 Rw.02 Kec.Kotabaru Kab.Karawang-41374</p>
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
	 		<td width="4%" height="25" class="center colom warna">No </td>
	 		<td width="37%" class="center colom warna">Nama Barang</td>
	 		<td width="14%" class="center colom warna">Satuan</td>
	 		<td width="17%" class="center colom warna">Harga Beli</td>
	 		<td width="17%" class="center colom warna">Harga Jual</td>
	 		<td width="11%" class="center colom warna">Stok</td>
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
		// $ex=$_GET['ex'];
		// if($ex=='pdf'){
		// 	$html=ob_get_contents();
		// 	ob_end_clean();
		// 	require_once('assets/html2pdf/html2pdf.class.php');
		// 	$pdf = new HTML2PDF('P','A4','en');
		// 	$pdf->WriteHTML($html);
		// 	$pdf->Output('Databrg.pdf', 'D');
			
		//  }
	
?>
<!-- <a href="?ex=pdf">export pdf</a> -->
