<?php
include_once("koneksi.php");
$cs=$_GET['cs'];
switch ($cs){
 	case 'select':
 		echo"
			<h1><b><p class='text-center' >DATA BARANG</p></b></h1><br/>
 			<table id='tampil_barang' class='display' width='100%'> 
 				<thead>
 					<tr>
 						<th><b>No.</b></th>
 						<th><b>Kategori Barang</b></th>
 						<th><b>Nama Barang</b></th>
 						<th><b>Satuan</b></th>
 						<th><b>Harga Beli</b></th>
 						<th><b>Harga Jual</b></th>
 						<th><b>Keterangan</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM barang 
 				INNER JOIN kategori ON kategori.ktg_id=barang.ktg_id 
				INNER JOIN satuan ON satuan.stn_id=barang.stn_id
 				ORDER BY kategori.ktg_id,barang.brg_nama ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'>
 						<td>".$no."</td>
 						<td>".$ktg_nama."</td>
 						<td>".$brg_nama."</td>
 						<td>".$stn_nama."</td>
 						<td>Rp.".number_format($brg_harga_bl,0,',',',')."</td>
 						<td>Rp.".number_format($brg_harga_jual,0,',',',')."</td>
 						<td>".$brg_ket."</td><td><button class='btn btn-danger' onclick='hapusbrg(".$brg_id.")'><span class='fa fa-fw fa-save'></span>Hapus</button>
 						<button class='btn btn-primary' onclick='ambilbarang(".$brg_id.")' id='barang'> <span class='fa fa-fw fa-edit'></span> Edit</button></td></tr>";

 					$no++;
 				}
 					
 			echo"</tbody>";
 			echo"</table>";

 		break;

 	case'insert':
 		$brg_id=$_GET['brg_id'];
 		$ktg=$_GET['ktg'];
 		$stn_id=$_GET['stn_id'];
 		// $stn_id2=$_GET['stn_id2'];
 		$nama=$_GET['nama'];
 		$hrg_jual=$_GET['hrg_jual'];
 		$hrg_beli=$_GET['hrg_beli'];
 		$ket=$_GET['ket'];
 		$brg_stok=0;
 		$view=mysql_query("SELECT * FROM barang WHERE brg_id='$brg_id'")or die(mysql_error());
 		$ketemu=mysql_num_rows($view);
	 		if($ketemu>0){
	 			$update=mysql_query("UPDATE barang SET ktg_id='$ktg',stn_id='$stn_id',brg_nama='$nama',brg_harga_bl='$hrg_beli',brg_harga_jual='$hrg_jual',brg_stok=brg_stok+'$brg_stok',brg_ket='$ket' WHERE brg_id='$brg_id'")or die(mysql_error());
	 		}else{
	 			$insert=mysql_query("INSERT INTO barang VALUES (NULL,'$ktg','$stn_id','$nama','$hrg_beli','$hrg_jual','$brg_stok','$ket')") or die(mysql_error());
	 		}

 		
 		break;

 	case'delete':
 		$id=$_GET['id'];
 		mysql_query("DELETE FROM barang WHERE brg_id='$id'")or die(mysql_error());
 		break;

 	case'ambilbarang':
 			$brg_id=$_GET['brg_id'];
 			$brg=mysql_query("SELECT * FROM  barang 
 							INNER JOIN kategori ON kategori.ktg_id=barang.ktg_id
 							INNER JOIN satuan ON satuan.stn_id=barang.stn_id 
 							WHERE brg_id='$brg_id'")or die(mysql_error());
 			$arr=mysql_fetch_array($brg);

 			echo "$arr[brg_id]||$arr[ktg_id]|$arr[ktg_nama]|$arr[brg_nama]|$arr[brg_harga_bl]|$arr[brg_harga_jual]|$arr[brg_ket]|$arr[stn_id]|$arr[stn_nama]|";
 		break;
 
 	case'cari_satuan':
 		$stn_nama=$_GET['stn_nama'];
 		$sql=mysql_query("SELECT * FROM satuan WHERE stn_nama LIKE '%".$stn_nama."%'") or die(mysql_error());
 		echo"<ul class='hover'>";
 			while($array=mysql_fetch_array($sql)){
 					extract($array);
 ?>
 					<li onclick="copystn('<?php echo $stn_id; ?>', '<?php echo $stn_nama; ?>')" class="hover" ><b><?php echo $stn_nama; ?></b></li>
<?php 			}
 		echo"</ul>";
 		break;

	case'cari_ktg':
 		$ktg_nm=$_GET['ktg_nm'];
 		$sql=mysql_query("SELECT * FROM kategori WHERE ktg_nama LIKE '%".$ktg_nm."%'") or die(mysql_error());
 		echo"<ul class='hover'>";
 			while($array=mysql_fetch_array($sql)){
 					extract($array);
?> 
 				<li onclick="copyktg('<?php echo $ktg_id; ?>','<?php echo $ktg_nama; ?>')" class="hover" ><b><?php echo $ktg_nama; ?></b></li>
 <?php			}
 		echo"</ul>";
 		break;






 }
 ?>
 <script>
 	$(document).ready(function(){
			$("#tampil_barang").DataTable({ordering:false});
	});		

 </script>
