
<?php 
date_default_timezone_set("asia/jakarta");
include_once("koneksi.php");
$cs=$_GET['cs'];
switch ($cs) {
// case pembuatan faktur
	case 'faktur':
		$datenow=date('Ymd');
		$sql=mysql_query("SELECT MAX(pbl_id)AS maxid FROM pembelian")or die(mysql_error());
		$array=mysql_fetch_array($sql)or die(mysql_error());
		$string=substr( $array['maxid'],11,3);
		$cekhari=substr($array['maxid'],3,8);
		// echo "string=".$string."</br>";
		// echo "cekhari=".$cekhari."</br>";

			if($cekhari!==$datenow){
				$faktur="PBL".$datenow."001";
			}else{
				$tambah=(int)$string+1;
				if(strlen($tambah)==1){
					$faktur="PBL".$datenow."00".$tambah;
				}elseif(strlen($tambah)==2){
					$faktur="PBL".$datenow."0".$tambah;
				}else{
					$faktur="PBL".$datenow.$tambah;
				}
			}

		echo $faktur;
		break;
// case pencarian data admin
	case 'cari_admin':
		$nm_adm=$_GET['nm_adm'];
		$sql=mysql_query("SELECT * FROM admin  WHERE adm_nama LIKE '%".$nm_adm."%'") or die(mysql_error());
		echo "<ul class='hover'>";
			while ($array=mysql_fetch_array($sql)) {
?>
				<li id="<?php echo $array['adm_id']; ?> " onclick="copyadm('<?php echo $array['adm_id'] ?>','<?php echo $array['adm_nama'] ?>')"><b><?php echo $array['adm_nama']; ?></b></li>
<?php
			}
		echo "</ul>";
		
		break;
// case pencarian data supplier
	case 'cari_spl':
		@$nm_spl=$_GET['nm_spl'];
		$sql=mysql_query("SELECT * FROM supplier  WHERE spl_nama LIKE '%".$nm_spl."%'") or die(mysql_error());
		echo "<ul class='hover'>";
			while ($array=mysql_fetch_array($sql)) {
?>
				<li id="<?php echo $array['spl_id']; ?> " onclick="copyspl('<?php echo $array['spl_id'] ?>','<?php echo $array['spl_nama'] ?>')"><b><?php echo $array['spl_nama']; ?></b></li>
<?php				
			}
		echo "</ul>";
		
		break;
// case pencarian data abarang
	case 'cari_barang':
		@$nm_brg=$_GET['nm_brg'];
		@$no=$_GET['no'];
		$sql=mysql_query("SELECT * FROM barang INNER JOIN satuan ON satuan.stn_id=barang.stn_id WHERE brg_nama LIKE '%".$nm_brg."%'") or die(mysql_error());
		echo "<table width='100%'><ul  >";
		echo "<tr><td><b>Nama</b></td><td><b>Harga Beli</b></td> <td><b>Keterangan</b></td></tr>";
			while ($array=mysql_fetch_array($sql)) {
?>				
			<tr class='hover'>
				<td><li id="<?php echo $array['brg_id']; ?> " onclick="copy_brg_beli('<?php echo $no; ?>','<?php echo $array['brg_id'];?>','<?php echo $array['brg_nama'];?>','<?php echo $array['stn_nama'];?>','<?php echo $array['brg_harga_bl']; ?>')">
							<b><?php echo $array['brg_nama']; ?></b>
							
				</li></td>
				<td><b><?php echo "Rp.".number_format($array['brg_harga_bl'],0,',','.') ; ?></b></td>
				<td><b><?php echo $array['brg_ket']; ?></b></td>


			</tr>
<?php			
			}
		echo "</table></ul>";
		
		break;

// case insert pembelian
	case'insert':
		//=================== header
		$pbl_id=$_GET['pbl_id'];
		$adm_id=$_GET['adm_id'];
		$spl_id=$_GET['spl_id'];
		$tanggal=date("Y-m-d");
		$no_nota=$_GET['no_nota'];
		//=================== form
		$brg_beli_id=$_GET['brg_beli_id'];
		$jumbel=$_GET['jumbel'];
		$diskon=$_GET['diskon'];
		$subtot=$_GET['subtot'];
		//==================== footer
		$total=$_GET['total'];
		// $diskon_akhir=$_GET['diskon_akhir'];
		// $total_akhir=$_GET['total_akhir'];
		// $bayar_akhir=$_GET['bayar_akhir'];
		// $kembalian_akhir=$_GET['kembalian_akhir'];
		$ket_akhir=$_GET['ket_akhir'];
		$hitung=count($brg_beli_id);

		for ($i=0;$i<$hitung;$i++) {
			$brg_beli_id2=$_GET['brg_beli_id'][$i];
			$jumbel2=$_GET['jumbel'][$i];
			$diskon2=$_GET['diskon'][$i];
			$subtot2=$_GET['subtot'][$i];
			$diskon2=$_GET['diskon'][$i];
			

			if(!empty($brg_beli_id2)||$brg_beli_id2!=NULL||$brg_beli_id2!=""){
				// query insert pdetail pembelian
				$query_dt=mysql_query("INSERT INTO dt_pembelian VALUES ('$pbl_id','$brg_beli_id2','$jumbel2','$subtot2','$diskon2')")or die(mysql_error());
				// query update stok barang
				$query_cari_brg=mysql_query("SELECT brg_stok FROM barang WHERE brg_id='$brg_beli_id2'")or die(mysql_error());
				$array=mysql_fetch_array($query_cari_brg);
				$stok_awal=$array['brg_stok'];
				// echo $stok_awal;
				if(mysql_num_rows($query_cari_brg)>0){
					$query_up_stok=mysql_query("UPDATE barang SET brg_stok='$stok_awal'+'$jumbel2' WHERE brg_id='$brg_beli_id2'") or die(mysql_error());
				}
			}
		}
		// query insert master pembelian
		$query=mysql_query("INSERT INTO pembelian VALUES ('$pbl_id','$adm_id','$spl_id','$no_nota','$tanggal','$total','$ket_akhir')")or die(mysql_error());
			break;
}

 ?>
