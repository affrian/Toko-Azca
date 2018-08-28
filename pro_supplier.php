<?php
include_once("koneksi.php");
$cs=$_GET['cs'];
switch ($cs){
 	case 'select':
 		echo"
				<h1><b><p class='text-center' >DATA SUPPLIER</p></b></h1><br/>
 			<table id='tablespl' class='display' width='100%'> 
 				<thead>
 					<tr>
 						<th><b>No.</b></th>
 						<th><b>Nama Supplier</b></th>
 						<th><b>No Telepon</b></th>
 						<th><b>Alamat Supplier</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM supplier ORDER BY spl_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'><td>".$no."</td><td>".$spl_nama."</td><td>".$spl_telp."</td><td>".$spl_alamat."</td><td><button class='btn btn-danger' onclick='hapusspl(".$spl_id.")'><span class='fa fa-close fa-lg'> </span> DELETE</button><button class='btn btn-primary' onclick='editspl(".$spl_id.")'><span class='fa fa-edit fa-lg'> </span> UPDATE</button></td></tr>";

 					$no++;
 				}
 					
 			echo"</tbody>";
 			echo"</table>";

 		break;

 	case'insert':
 		$frm_spl_id=$_GET['frm_spl_id'];
 		$frm_spl_nama=$_GET['frm_spl_nama'];
 		$frm_spl_telp=$_GET['frm_spl_telp'];
 		$frm_spl_ket=$_GET['frm_spl_ket'];
 		$sql=mysql_query("SELECT * FROM supplier WHERE spl_id='$frm_spl_id'")or die(mysql_error());
 		$ketemu=mysql_num_rows($sql);
 		if($ketemu>0){
 			$update=mysql_query("UPDATE supplier SET spl_nama='$frm_spl_nama',spl_telp='$frm_spl_telp',spl_alamat='$frm_spl_ket' WHERE spl_id='$frm_spl_id'")or die(mysql_error());
 		}else{
 			$insert=mysql_query("INSERT INTO supplier VALUES (NULL,'$frm_spl_nama','$frm_spl_ket','$frm_spl_telp')") or die(mysql_error());	
 		}
 		
 		break;

 	case'delete':
 		$spl_id=$_GET['spl_id'];
 		mysql_query("DELETE FROM supplier WHERE spl_id='$spl_id'")or die(mysql_error());
 		break;

 	case'ambil_spl':
 		$spl_id=$_GET['spl_id'];
 		$sql=mysql_query("SELECT * FROM supplier WHERE spl_id='$spl_id'")or die(mysql_error());
 		$array=mysql_fetch_array($sql)or die(mysql_error());
 		echo "$array[spl_id]|$array[spl_nama]|$array[spl_alamat]|$array[spl_telp]|";
 		break;

 
 } 



 ?>
 <script>
 	$(document).ready(function(){
			$("#tablespl").dataTable({ordering:false});
	});		

	
 </script>
