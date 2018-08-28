<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Laporan penjualan|Toko Azca</title>
	<link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
	<link rel="stylesheet" href="assets/css/lap_style.css" />
</head>
<body>
	<?php 
		include_once("koneksi.php");
		@$lap_pnj_fak=$_GET['lap_pnj_fak'];
		@$lap_tgl_awal_pnj=$_GET['lap_tgl_awal_pnj'];
		@$lap_tgl_akhir_pnj=$_GET['lap_tgl_akhir_pnj'];
		if($lap_pnj_fak!=""){
			$query=mysql_query("SELECT penjualan.*, 
								dt_penjualan.*,
								admin.adm_id,admin.adm_nama,
								barang.brg_id,barang.brg_nama,barang.brg_harga_bl,
								satuan.*,
								(SELECT COUNT(dt_penjualan.pnj_id) FROM dt_penjualan WHERE penjualan.pnj_id=dt_penjualan.pnj_id) AS baris 
								FROM dt_penjualan
								INNER JOIN  penjualan ON dt_penjualan.pnj_id=penjualan.pnj_id
								INNER JOIN admin ON admin.adm_id=penjualan.adm_id
								INNER JOIN barang ON barang.brg_id=dt_penjualan.brg_id
								INNER JOIN satuan ON satuan.stn_id=barang.stn_id
								WHERE dt_penjualan.pnj_id='$lap_pnj_fak'")or die(mysql_error());
		}else{
			$query=mysql_query("SELECT penjualan.*, 
								dt_penjualan.*,
								admin.adm_id,admin.adm_nama,
								barang.brg_id,barang.brg_nama,barang.brg_harga_bl,
								satuan.*,
								(SELECT COUNT(dt_penjualan.pnj_id) FROM dt_penjualan WHERE penjualan.pnj_id=dt_penjualan.pnj_id) AS baris
								FROM dt_penjualan
								INNER JOIN  penjualan ON dt_penjualan.pnj_id=penjualan.pnj_id
								INNER JOIN admin ON admin.adm_id=penjualan.adm_id
								INNER JOIN barang ON barang.brg_id=dt_penjualan.brg_id
								INNER JOIN satuan ON satuan.stn_id=barang.stn_id
								WHERE penjualan.pnj_tanggal BETWEEN '$lap_tgl_awal_pnj' AND '$lap_tgl_akhir_pnj' ORDER BY penjualan.pnj_tanggal ASC")or die(mysql_error());
			
		}
	 ?>
	

	 <table width="98%" style="margin-left: 10px;font-size: 12px" class="colom">
		<tr>
			<td colspan="4"><p class="center"><img src="img/logo.png" height="150px" width="200px" align="center" /></p></td>
			<td colspan="8"><h2><p class="padding">TOKO AZCA</p></h2>
				<p>Jalan Raya. By Pass Jomin Timur RT 11 Rw.02 Kec.Kotabaru Kab.Kaarawang-41374</p>
			</td>
		</tr>
		<tr>
			<td colspan="12"> <hr class="garis" /></td>
		</tr>
		<tr>
			<td colspan="12" class="center"><b>LAPORAN PENJUALAN</b></td>
		</tr>
		<tr>
			<td colspan="12"><b>Periode: <?php echo $lap_tgl_awal_pnj.' Sampai '.$lap_tgl_akhir_pnj; ?></b></td>
		</tr>
		<tr>
			<td colspan="12"> <hr class="garis" /></td>
		</tr>
	 	<tr>
	 		<td class="center colom warna">No </td>
	 		<td class="center colom warna">No Faktur</td>
	 		<td class="center colom warna">Nama Admin</td>
	 		<!-- <td class="center colom warna">Nama Supplier</td> -->
	 		<!-- <td class="center colom warna">No Nota</td> -->
	 		<td class="center colom warna">Nama Barang</td>
	 		<td class="center colom warna">Satuan</td>
	 		<td class="center colom warna">Harga Jual</td>
	 		<td class="center colom warna">Jumlah Jual</td>
	 		<td class="center colom warna">Diskon Jual</td>
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

	 			echo "<tr>";
		 				if($jum<=1){
		 					echo"<td class='center colom' rowspan='".$array['baris']."'>".$no." </td>";
		 					echo"<td class='center colom' rowspan='".$array['baris']."'><b>".$array['pnj_id']."</b> </td>";
		 					echo"<td class='center colom' rowspan='".$array['baris']."'>".$array['adm_nama']." </td>";
		 					// echo"<td class='center colom' rowspan='".$array['baris']."'>".$array['spl_nama']." </td>";
		 					// echo"<td class='center colom' rowspan='".$array['baris']."'>".$array['pnj_nota']." </td>";
		 					$jum=$array['baris'];
		 					$no++;
		 				}else{
		 					$jum=$jum-1;
		 				}
		?>
		 					<td class='center colom'><?php echo $array['brg_nama']; ?></td>
		 					<td class='center colom'><?php echo $array['stn_nama']; ?></td>
		 					<td class='center colom'><?php echo "Rp.".number_format($array['brg_harga_bl'],0,',','.'); ?></td>
		 					<td class='center colom'><?php echo $array['dt_pnj_jumbel']; ?></td>
		 					<td class='center colom'><?php echo "Rp.".number_format($array['dt_pnj_diskon'],0,',','.') ; ?></td>
		<?php
		 				if($jum2<=1){
		 					echo"<td class='center colom' rowspan='".$array['baris']."'>"."Rp.".number_format($array['dt_pnj_subtot'],0,',','.') ." </td>";
		 					echo"<td class='center colom' rowspan='".$array['baris']."'>".$array['pnj_ket']." </td>";
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