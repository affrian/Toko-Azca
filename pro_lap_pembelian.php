<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Laporan Pembelian|Azca House Online</title>
	<title>Laporan Barang|Azca House Oline</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
	<link rel="stylesheet" href="assets/css/lap_style.css" />
</head>
<body>
	<?php 
		include_once("koneksi.php");
		@$lap_pbl_fak=$_GET['lap_pbl_fak'];
		@$lap_tgl_awal_beli=$_GET['lap_tgl_awal_beli'];
		@$lap_tgl_akhir_beli=$_GET['lap_tgl_akhir_beli'];
		// function rubah_tgl_awal($lap_tgl_awal_beli){
		// 	$explode=explode($lap_tgl_awal_beli,'-');
		// 	$tahun=$explode[0];
		// 	$bulan=$explode[1];
		// 	$tgl=$explode[2];
		// 	$implode=implode($tgl.'-'.$bulan.'-'.$tahun);
		// 	return $implode;
		// }
		// echo $lap_tgl_awal_beli;
		if($lap_pbl_fak!=""){
			$query=mysql_query("SELECT pembelian.*, 
								dt_pembelian.*,
								admin.adm_id,admin.adm_nama,
								supplier.spl_id,supplier.spl_nama,
								barang.brg_id,barang.brg_nama,barang.brg_harga_bl,
								satuan.*,
								(SELECT COUNT(dt_pembelian.pbl_id) FROM dt_pembelian WHERE pembelian.pbl_id=dt_pembelian.pbl_id) AS baris 
								FROM dt_pembelian
								INNER JOIN  pembelian ON dt_pembelian.pbl_id=pembelian.pbl_id
								INNER JOIN admin ON admin.adm_id=pembelian.adm_id
								INNER JOIN supplier ON supplier.spl_id=pembelian.spl_id
								INNER JOIN barang ON barang.brg_id=dt_pembelian.brg_id
								INNER JOIN satuan ON satuan.stn_id=barang.stn_id
								WHERE dt_pembelian.pbl_id='$lap_pbl_fak'")or die(mysql_error());
		}else{
			$query=mysql_query("SELECT pembelian.*, 
								dt_pembelian.*,
								admin.adm_id,admin.adm_nama,
								supplier.spl_id,supplier.spl_nama,
								barang.brg_id,barang.brg_nama,barang.brg_harga_bl,
								satuan.*,
								(SELECT COUNT(dt_pembelian.pbl_id) FROM dt_pembelian WHERE pembelian.pbl_id=dt_pembelian.pbl_id) AS baris
								FROM dt_pembelian
								INNER JOIN  pembelian ON dt_pembelian.pbl_id=pembelian.pbl_id
								INNER JOIN admin ON admin.adm_id=pembelian.adm_id
								INNER JOIN supplier ON supplier.spl_id=pembelian.spl_id
								INNER JOIN barang ON barang.brg_id=dt_pembelian.brg_id
								INNER JOIN satuan ON satuan.stn_id=barang.stn_id
								WHERE pembelian.pbl_tanggal BETWEEN '$lap_tgl_awal_beli' AND '$lap_tgl_akhir_beli' ORDER BY pembelian.pbl_tanggal ASC")or die(mysql_error());
			
		}
	 ?>
	

	 <table width="98%" style="margin-left: 10px;font-size: 12px" class="colom">
		<tr>
			<td colspan="4"><p class="center"><img src="img/logo.png" height="150px" width="200px" align="center" /></p></td>
			<td colspan="8"><h2><p class="padding" style="font-size: 25px !important;">TOKO AZCA</p></h2>
				<p>Jalan Raya. By Pass Jomin Timur RT 11 Rw.02 Kec.Kotabaru Kab.Kaarawang-41374</p>
			</td>
		</tr>
		<tr>
			<td colspan="12"> <hr class="garis" /></td>
		</tr>
		<tr>
			<td colspan="12" class="center"><b>LAPORAN PEMBELIAN</b></td>
		</tr>
		<tr>
			<td colspan="12"><b>Periode: <?php echo $lap_tgl_awal_beli.' Sampai '.$lap_tgl_akhir_beli; ?></b></td>
		</tr>
		<tr>
			<td colspan="12"> <hr class="garis" /></td>
		</tr>
	 	<tr>
	 		<td class="center colom warna">No </td>
	 		<td class="center colom warna">No Faktur</td>
	 		<td class="center colom warna">Nama Admin</td>
	 		<td class="center colom warna">Nama Supplier</td>
	 		<td class="center colom warna">No Nota</td>
	 		<td class="center colom warna">Nama Barang</td>
	 		<td class="center colom warna">Satuan</td>
	 		<td class="center colom warna">Harga Beli</td>
	 		<td class="center colom warna">Jumlah Beli</td>
	 		<td class="center colom warna">Diskon Beli</td>
	 		<td class="center colom warna">Subtotal</td>
	 		<td class="center colom warna">Ket</td>
	 	</tr>
	<?php 
	 	$no=1;
	 	$jum=1;
	 	$jum2=1;
	 	$jum3=1;

	 	if (mysql_num_rows($query)>0) {
	 		while($array=mysql_fetch_array($query)){
				// echo "<tr>";
				// 	echo"<td class='center colom'>".$array['id']." </td>";
				// echo "</tr>";	 			
	 			// echo "<tr>";
		 		// 	if($jum2<=1){
			 	// 				echo"<td class='center colom' colspan='12'><b>Faktur: ".$lap_pbl_fak."</b></td>";
			 	// 				$jum3=$array['baris'];
			 	// 			}else{
			 	// 				$jum3=$jum3-1;
			 	// 			}
	 			// echo "</tr>";

	 			echo "<tr>";
		 				if($jum<=1){
		 					echo"<td class='center colom' rowspan='".$array['baris']."'>".$no." </td>";
		 					echo"<td class='center colom' rowspan='".$array['baris']."'><b>".$array['pbl_id']."</b> </td>";
		 					echo"<td class='center colom' rowspan='".$array['baris']."'>".$array['adm_nama']." </td>";
		 					echo"<td class='center colom' rowspan='".$array['baris']."'>".$array['spl_nama']." </td>";
		 					echo"<td class='center colom' rowspan='".$array['baris']."'>".$array['pbl_nota']." </td>";
		 					$jum=$array['baris'];
		 					$no++;
		 				}else{
		 					$jum=$jum-1;
		 				}
		?>
		 					<td class='center colom'><?php echo $array['brg_nama']; ?></td>
		 					<td class='center colom'><?php echo $array['stn_nama']; ?></td>
		 					<td class='center colom'><?php echo "Rp.".number_format($array['brg_harga_bl'],0,',','.'); ?></td>
		 					<td class='center colom'><?php echo $array['dt_pbl_jumbel']; ?></td>
		 					<td class='center colom'><?php echo "Rp.".number_format($array['dt_pbl_diskon'],0,',','.') ; ?></td>
		<?php
		 				if($jum2<=1){
		 					echo"<td class='center colom' rowspan='".$array['baris']."'>"."Rp.".number_format($array['dt_pbl_subtot'],0,',','.') ." </td>";
		 					echo"<td class='center colom' rowspan='".$array['baris']."'>".$array['pbl_ket']." </td>";
		 					$jum2=$array['baris'];
		 				}else{
		 					$jum2=$jum2-1;
		 				}
	 			echo "</tr>";
	 		}
	 	 
	 	}else{
	 		echo "<tr>";
	 		echo"<td class='center colom' colspan='12'> <b>Data Tidak Ditemukan</b></td>";
	 		echo "</tr>";
	 	}
	 		
		 					
		?>		
		 				
	 </table>
</body>
</html>