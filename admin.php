<div class="cc" id="frm-adm" style="display: none;">
		<div class="head" style="margin-left: 91%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div>
	
	<div class="posisi">
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><input type="button" name="input_admin" class="btn btn-danger" id="input_admin" value="Input Admin"></li>
					<li role="presentation"><input type="button" name="barang" class="btn btn-primary" id="select_admin" value="Admin"></li>
					<li role="presentation"><input type="button" name="c_pass" class="btn btn-danger" id="c_pass" value="Ubah Password"></li>
					  
				</ul>
			<div id="form_adm" >
				<h1><p class="text-center">MASTER ADMIN</p></h1><hr />
				<form class="form-horizontal ">
					<!--divisi   Status Admin-->
				<input type="text" id="adm_id_m" hidden="true">
				  <div class="form-group">
				    <label for="inputEmail3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Status Admin</p></label>
				    <div class="col-sm-4">
				    	<select id="sts_id" class="form-control">
				    		<option class="nn" selected="selected">===Pilih Status Admin===</option>

				    		<?php 
				    			include_once("koneksi.php");
				    			$query=mysql_query("SELECT * FROM admin_status")or die(mysql_error());
				    			while($array=mysql_fetch_array($query)){
				    				extract($array);
				    				echo '<option value="'.$sts_id.'">'.$sts_status.'</option>';
				    			}
				    		 ?>
				    	</select>
				    </div>
				  </div>
				<!--divisi  Nama Admin -->
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Nama Admin</p></label>
				    <div class="col-sm-4">
				      <input type="text" name="adm_nama_m" class="form-control" id="adm_nama_m" placeholder="Nama Admin" required="required" style="text-transform: uppercase;" maxlength="25">
				    </div>
				  </div>
				  <!--divisi  Password -->
				   <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Password</p></label>
				    <div class="col-sm-4">
				      <input type="Password" name="adm_pass" class="form-control" id="adm_pass" placeholder="Masukan Password" required="required" maxlength="6">
				    </div>
				  </div>
				  <!--divisi Konfirmasi Password  -->
				   <div class="form-group has-feedback"" >
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Konfirmasi Password</p></label>
				    <div class="col-sm-4">
				      <input type="Password" name="adm_konfir" class="form-control" id="adm_konfir" placeholder="Konfirmasi Password" required="required" maxlength="6"   aria-describedby="inputSuccess2Status">
				      <!-- <button type="button" class="form-control-feedback" style="z-index: 1"><span class="glyphicon glyphicon-eye-open"></span></button> -->
				      <span class="fault glyphicon glyphicon-remove form-control-feedback" style="display: none"></span>
				      <span class="true glyphicon glyphicon-ok form-control-feedback" style="display: none"></span>
 					  <!-- <span id="inputSuccess2Status" class="sr-only">(success)</span> -->
				    </div>
				  </div>
				  <!-- divisi button -->
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-1">
				      <button type="button" id="adm_simpan" class="btn btn-md btn-primary"><span class="fa fa-sw fa-save"></span> Save</button>
				    </div>
				  </div>
				</form>	
			</div>
			<!--divisi view admin -->
			<div class="row">
				<div id="view_adm" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
			</div>
			<!-- divisi form ubah password -->
				<div id="frm_c_pass" style="display: none;">
					<h1><p class="text-center">UBAH PASSWORD</p></h1><hr />
					<form action="" class="form-horizontal">
						<div class="form-group has-feedback"">
						    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Password Awal</p></label>
						    <div class="col-sm-4">
						      <input type="password" name="adm_pass_awal" class="form-control" id="adm_pass_awal" placeholder="Masukan Password Lama" required="required" maxlength="6">
						      <span id="pass_awal_false" class="fault  glyphicon glyphicon-remove form-control-feedback" style="display: none"></span>
							  <span id="pass_awal_true" class="true  glyphicon glyphicon-ok form-control-feedback" style="display: none"></span>
						    </div>
					 	</div>
					  <!--divisi  Password -->
					    <div class="form-group">
						    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Password Baru</p></label>
						    <div class="col-sm-4">
						      <input type="Password" name="adm_pass_baru" class="form-control" id="adm_pass_baru" placeholder="Masukan Password" required="required" maxlength="6">
						    </div>
					 	</div>
					  <!--divisi Konfirmasi Password  -->
						   <div class="form-group has-feedback">
							    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Konfirmasi Password</p></label>
							    <div class="col-sm-4">
							      <input type="Password" name="adm_pass_br_kon" class="form-control" id="adm_pass_br_kon" placeholder="Konfirmasi Password" required="required" maxlength="6"   aria-describedby="inputSuccess2Status">
							      <span id="kon_false" class="fault  glyphicon glyphicon-remove form-control-feedback" style="display: none"></span>
							      <span id="kon_true" class="true  glyphicon glyphicon-ok form-control-feedback" style="display: none"></span>
							    </div>
						 	</div>
						 	<!-- divisi button -->
						  <div class="form-group">
						    <div class="col-sm-offset-2 col-sm-1">
						      <button type="button" id="adm_simpan_pass" class="btn btn-md btn-primary">
						      	<span class="fa fa-sw fa-save"></span> Save</button>
						    </div>
						  </div>
					</form>
				</div>
</div>	
</div>
