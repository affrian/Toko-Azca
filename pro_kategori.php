<?php
include_once("koneksi.php");
$cs=$_GET['cs'];
switch ($cs){
 	case 'select':
 		echo"
			<h1><b><p class='text-center' >DATA KATEGORI</p></b></h1><br/>
 			<table id='table' class='display' width='100%'> 
 				<thead>
 					<tr>
 						<th><b>No.</b></th>
 						<th><b>Nama Kategori</b></th>
 						<th><b>Aksi</b></th>
 					</tr>
 				</thead>";
 			echo"<tbody>";
 			$no=1;
 			$query=mysql_query("SELECT * FROM kategori ORDER BY ktg_id ASC")or die(mysql_error());
 				while($array=mysql_fetch_array($query)){
 					extract($array);
 					echo"<tr align='left'><td>".$no."</td><td>".$ktg_nama."</td><td><button class='btn btn-danger' onclick='hapusktg(".$ktg_id.")'> <span class='fa fa-close fa-lg' ></span> DELETE</button><button class='btn btn-primary' onclick='editktg(".$ktg_id.")'><span class='fa fa-edit fa-lg ' ></span> UPDATE</button></td></tr>";

 					$no++;
 				}
 					
 			echo"</tbody>";
 			echo"</table>";

 		break;

 	case'insert':
 		$nm_ktg=$_GET['nm_ktg'];

 		$id_kategori=$_GET['id_kategori'];
 		$sql=mysql_query("SELECT * FROM kategori WHERE ktg_id='$id_kategori'")or die(mysql_error());
 		$ketemu=mysql_num_rows($sql);
	 		if($ketemu>0){
	 			$update=mysql_query("UPDATE kategori SET ktg_nama='$nm_ktg' WHERE ktg_id='$id_kategori'")or die(mysql_error());
	 		}else{
	 			$insert=mysql_query("INSERT INTO kategori VALUES (NULL,'$nm_ktg')") or die(mysql_error());
	 		}
 		
 		break;

 	case'delete':
 		$id_ktg=$_GET['id_ktg'];
 		mysql_query("DELETE FROM kategori WHERE ktg_id='$id_ktg'")or die(mysql_error());
 		break;

 	

 	case'ambil_ktg':
 		$ktg_id=$_GET['ktg_id'];
 		$sql=mysql_query("SELECT * FROM kategori WHERE ktg_id='$ktg_id'")or die(mysql_error());
 		$array=mysql_fetch_array($sql)or die(mysql_error());
 		echo"$array[ktg_id]|$array[ktg_nama]|";
 		break;
 
 } 



 ?>
 <script>
 	$(document).ready(function(){
			$("#table").dataTable({ordering:false});
	});		

	
 </script>
