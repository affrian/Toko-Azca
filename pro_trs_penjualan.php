
<?php 
date_default_timezone_set("asia/jakarta");
include_once("koneksi.php");
$cs=$_GET['cs'];
switch ($cs) {
// case pembuatan faktur
	case 'faktur':
		$datenow=date('Ymd');
		$sql=mysql_query("SELECT MAX(pnj_id)AS maxid FROM penjualan")or die(mysql_error());
		$array=mysql_fetch_array($sql)or die(mysql_error());
		$fk=$array['maxid'];
		$string=substr( $array['maxid'],11,3);
		$cekhari=substr($array['maxid'],3,8);
		// echo "string=".$string."</br>";
		// echo "cekhari=".$cekhari."</br>";
			if($cekhari!==$datenow){
				$faktur="PNJ".$datenow."001";
			}else{
				$tambah=(int)$string+1;
				if(strlen($tambah)==1){
					$faktur="PNJ".$datenow."00".$tambah;
				}elseif(strlen($tambah)==2){
					$faktur="PNJ".$datenow."0".$tambah;
				}else{
					$faktur="PNJ".$datenow.$tambah;
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
				<li id="<?php echo $array['adm_id']; ?> " onclick="pnjcopyadm('<?php echo $array['adm_id'] ?>','<?php echo $array['adm_nama'] ?>')"><b><?php echo $array['adm_nama']; ?></b></li>
<?php
			}
		echo "</ul>";
		
		break;
// case pencarian data supplier
	case 'cari_cs':
		@$nm_cs=$_GET['nm_cs'];
		$sql=mysql_query("SELECT * FROM costumer  WHERE cst_nama LIKE '%".$nm_cs."%'") or die(mysql_error());
		echo "<ul class='hover'>";
			while ($array=mysql_fetch_array($sql)) {
?>
				<li id="<?php echo $array['cst_id']; ?> " onclick="pnjcopycst('<?php echo $array['cst_id'] ?>','<?php echo $array['cst_nama'] ?>')"><b><?php echo $array['cst_nama']; ?></b></li>
<?php				
			}
		echo "</ul>";
		
		break;
// case pencarian data abarang
	case 'cari_barang':
		@$pnj_nm_brg=$_GET['pnj_nm_brg'];
		@$pnj_no=$_GET['pnj_no'];
		$sql=mysql_query("SELECT * FROM barang INNER JOIN satuan ON satuan.stn_id=barang.stn_id WHERE brg_nama LIKE '%".$pnj_nm_brg."%'") or die(mysql_error());
		echo "<table width='100%'><ul  >";
		echo "<tr><td><b>Nama</b></td><td><b>Harga Beli</b></td> <td><b>Keterangan</b></td></tr>";
			while ($array=mysql_fetch_array($sql)) {
?>				
			<tr class='hover'>
				<td><li id="<?php echo $array['brg_id']; ?> " onclick="pnj_copy_brg('<?php echo $pnj_no; ?>','<?php echo $array['brg_id'];?>','<?php echo $array['brg_nama'];?>','<?php echo $array['stn_nama'];?>','<?php echo $array['brg_harga_jual']; ?>','<?php echo $array['brg_stok']; ?>')">
							<b><?php echo $array['brg_nama']; ?></b>
							
				</li></td>
				<td><b><?php echo "Rp.".number_format($array['brg_harga_jual'],0,',','.') ; ?></b></td>
				<td><b><?php echo $array['brg_ket']; ?></b></td>


			</tr>
<?php			
			}
		echo "</table></ul>";
		
		break;
// case insert pembelian
	case'insert':
		//=================== header
		$frm_pnj_id=$_GET['frm_pnj_id'];
		$frm_pnj_adm_id=$_GET['frm_pnj_adm_id'];
		$frm_pnj_cs_id=$_GET['frm_pnj_cs_id'];
		$tanggal=date("Y-m-d");
		//=================== form
		$pnj_brg_id=$_GET['pnj_brg_id'];
		$pnj_jumbel=$_GET['pnj_jumbel'];
		$pnj_diskon=$_GET['pnj_diskon'];
		$pnj_subtot=$_GET['pnj_subtot'];
		//==================== footer
		$frm_pnj_tot=$_GET['frm_pnj_tot'];
		$frm_pnj_diskon_akhir=$_GET['frm_pnj_diskon_akhir'];
		$frm_pnj_total_akhir=$_GET['frm_pnj_total_akhir'];
		$frm_pnj_bayar_akhir=$_GET['frm_pnj_bayar_akhir'];
		$frm_pnj_kembalian_akhir=$_GET['frm_pnj_kembalian_akhir'];
		$frm_pnj_ket_akhir=$_GET['frm_pnj_ket_akhir'];
		$hitung=count($pnj_brg_id);


		for ($i=0;$i<$hitung;$i++) {
			$pnj_brg_id2=$_GET['pnj_brg_id'][$i];
			$pnj_jumbel2=$_GET['pnj_jumbel'][$i];
			$pnj_diskon2=$_GET['pnj_diskon'][$i];
			$pnj_subtot2=$_GET['pnj_subtot'][$i];

			if(!empty($pnj_brg_id2)||$pnj_brg_id2!=NULL||$pnj_brg_id2!=""){
					// query insert pdetail pembelian
					$query_dt=mysql_query("INSERT INTO dt_penjualan VALUES ('$frm_pnj_id','$pnj_brg_id2','$pnj_jumbel2','$pnj_subtot2','$pnj_diskon2')")or die(mysql_error());
					// query update stok barang
					$query_cari_brg=mysql_query("SELECT brg_stok FROM barang WHERE brg_id='$pnj_brg_id2'")or die(mysql_error());
					$array=mysql_fetch_array($query_cari_brg);
					$stok_awal=$array['brg_stok'];
					echo $stok_awal;
					if(mysql_num_rows($query_cari_brg)>0){
						$query_up_stok=mysql_query("UPDATE barang SET brg_stok='$stok_awal'-'$pnj_jumbel2' WHERE brg_id='$pnj_brg_id2'") or die(mysql_error());
					}
			}
			
		}
		// query insert master pembelian
		$query=mysql_query("INSERT INTO penjualan VALUES ('$frm_pnj_id','$frm_pnj_adm_id','$frm_pnj_cs_id','$tanggal','$frm_pnj_tot','$frm_pnj_ket_akhir','$frm_pnj_total_akhir','$frm_pnj_diskon_akhir','$frm_pnj_bayar_akhir','$frm_pnj_kembalian_akhir')")or die(mysql_error());
	
			break;
}

 ?>
