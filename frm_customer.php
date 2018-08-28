<div class="cc" id="frm-cus" style="display: none;">
	<div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div>
	<div class="posisi">
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><input type="button" name="input_cus" class="btn btn-danger" id="input_cus" value="Input Customer"></li>
					<li role="presentation"><input type="button" name="cus" class="btn btn-primary" id="select_cus" value="Data Customer" ></li>
					  
				</ul>
			<div id="form_cus" >
				<h1><p class="text-center">MASTER CUSTOMER</p></h1><hr />
				<form class="form-horizontal ">
				 
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label"><p class="text-left">Nama customer</p></label>
				    <div class="col-sm-4">
				    	<input type="text" name="cus_id" id="cus_id" hidden="hidden">
				      <input type="text" name="nm_cus" class="form-control" id="nm_cus" placeholder="Nama customer" required="required" style="text-transform: uppercase;" maxlength="20">
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label"><p class="text-left">Keterangan customer</p></label>
				    <div class="col-sm-4">
				    	<textarea name="ket_cus" class="form-control" id="ket_cus" placeholder="keterangan Customer" required="required"  cols="30" rows="6" style="text-transform: uppercase;" maxlength="60"></textarea>
				    </div>
				  </div>

				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-1">
				      <button type="button" id="simpan_cus" class="btn btn-md btn-primary"><span class="fa fa-sw fa-save" ></span> Save</button>
				    </div>
				  </div>
				</form>	
			</div>

		<div id="view_cus"></div>
</div>
</div>

	