<?php 

		mysql_connect("localhost","root","password");
		mysql_select_db("tutorial");

		$nama_karyawan=$_POST['nama_karyawan'];
		$umur_karyawan=$_POST['umur_karyawan'];
		
		function proses_hoby($id_karyawan)
			{
				if(isset($_POST["rincian_hoby"]))
					{
						$hoby=$_POST["rincian_hoby"];
						reset($hoby);
						while (list($key, $value) = each($hoby)) 
							{
								$rincian_hoby	=$_POST["rincian_hoby"][$key];
								$jenis_hoby		=$_POST["jenis_hoby"][$key];
								$sql_hoby	="INSERT INTO tbl_hoby(rincian_hoby,jenis_hoby,id_karyawan)
											  VALUES('$rincian_hoby','$jenis_hoby','$id_karyawan')";  
								$hasil_hoby	=mysql_query($sql_hoby);	
							}
						}		
			}
		
		$sql="INSERT INTO tbl_karyawan(nama_karyawan,umur_karyawan)
     	  			  VALUES('$nama_karyawan','$umur_karyawan')";		
		$hasil=mysql_query($sql);
		$id_karyawan=mysql_insert_id();	
		if($hasil)
			{ 
				proses_hoby($id_karyawan);
				echo "Data berhasil diinput";
			}
		else
			{
				echo "Data Gagal diinput";	
			}	

 ?>