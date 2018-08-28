<div class="cc" id="frm-ktg" style="display: none;">
	<div class="head" style="margin-left: 90%"><button type="button" class="btn btn-danger keluar"><span class="fa fa-fw fa-close" ></span>  CLOSE</button></div>
	<div class="posisi">
				<ul class="nav nav-tabs">
					<li role="presentation" class="active"><input type="button" name="input_ktg" class="btn btn-danger" id="input_ktg" value="Input Kategori"></li>
					<li role="presentation"><input type="button" name="kategori" class="btn btn-primary" id="kategori" value="Kategori" onclick="sub_hal_ktg('select')"></li>
					  
				</ul>
			<div id="form_ktg" >
				<h1><p class="text-center">MASTER KATEGORI</p></h1><hr />
				<form class="form-horizontal ">
				 
				  <div class="form-group">
				    <label for="inputPassword3" class="col-sm-2 control-label"><p class="text-left">Nama Kategori</p></label>
				    <div class="col-sm-4">
				    	<input type="text" name="id_kategori" id="id_kategori" hidden="true">
				      <input type="text" name="nm_ktg" class="form-control" id="nm_ktg" placeholder="Nama Kategori" required="required" style="text-transform: uppercase;" >
				    </div>
				  </div>

				  
				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-1">
				      <button type="button" id="simpan_ktg" onclick="simpanktg()" class="btn btn-md btn-primary"><span class="fa fa-sw fa-save" ></span> Save</button>
				    </div>
				  </div>
				</form>	
			</div>
		<div id="view_ktg"></div>
	</div>
</div>