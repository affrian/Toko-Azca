<div class="cc" id="frm-spl" style="display: none;">
		<div class="head" style="margin-left: 91%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div>
	
	<div class="posisi">
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><input type="button" name="input_spl" class="btn btn-danger" id="input_spl" value="Input supplier"></li>
					<li role="presentation"><input type="button" name="supplier" class="btn btn-primary" id="supplier" value="supplier"></li>
					  
				</ul>
			<div id="form_spl" >
				<h1><p class="text-center">MASTER SUPPLIER</p></h1><hr />
				<form class="form-horizontal ">
					<input type="text" id="frm_spl_id" hidden="hidden">
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Nama supplier</p></label>
				    <div class="col-sm-4">
				      <input type="text" name="frm_spl_nama" class="form-control" id="frm_spl_nama" placeholder="Nama supplier" required="required" style="text-transform: uppercase;" maxlength="30">
				    </div>
				  </div>
				    <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">No Telepon</p></label>
				    <div class="col-sm-4">
				      <input type="text" name="frm_spl_telp" class="form-control" id="frm_spl_telp" placeholder="No Telepon" required="required" style="text-transform: uppercase;" maxlength="13" onkeyup="valid_angka_spl_tlp(event)">
				    </div>
				  </div>
				  
				  
				   <div class="form-group">
				    <label for="inputPassword3" class="col-sm-1 col-md-2 col-lg-2 control-label"><p class="text-left">Alamat </p></label>
				    <div class="col-sm-4">
				    	<!-- <input type="text"  id="ket" class="form-control"  required="required" style="height: 100px"> -->
				      <textarea name="frm_spl_ket" id="frm_spl_ket" cols="65" rows="5" required="required" class="form-control" maxlength="60" placeholder="Masukan Alamat Supplier"></textarea>
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-1">
				      <button type="button" id="frm_spl_simpan" class="btn btn-md btn-primary"><span class="fa fa-sw fa-save"></span> Save</button>
				    </div>
				  </div>
				</form>	
			</div>
			<div class="row">
				<div id="view_spl" class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
			</div>
			
</div>	
</div>