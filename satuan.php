<div class="cc" id="frm-stn" style="display: none;">
	<div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div>
	<div class="posisi">
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><input type="button" name="input_stn" class="btn btn-danger" id="input_stn" value="Input Satuan"></li>
					<li role="presentation"><input type="button" name="satuan" class="btn btn-primary" id="satuan" value="Satuan" onclick="sub_hal_stn('select')"></li>
					  
				</ul>
			<div id="form_stn" >
				<h1><p class="text-center">MASTER SATUAN</p></h1><hr />
				<form class="form-horizontal ">
				 
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label"><p class="text-left">Nama Satuan</p></label>
				    <div class="col-sm-4">
				    	<input type="text" name="satuan_id" id="satuan_id" hidden="true">
				      <input type="text" name="nm_stn" class="form-control" id="nm_stn" placeholder="Nama Satuan" required="required" style="text-transform: uppercase;" >
				    </div>
				  </div>

				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-1">
				      <button type="button" id="simpan_stn" onclick="simpanstn()" class="btn btn-block btn-primary"><span class="fa fa-sw fa-save" ></span> Save</button>
				    </div>
				  </div>
				</form>	
			</div>

		<div id="view_stn"></div>
</div>
</div>

	