<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="shortcut icon" type="image/x-icon" href="#" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" /><!-- css bootstrap -->
	<link rel="stylesheet" href="../assets/font-awesome/css/font-awesome.min.css" /><!-- css font awesome -->
	<link rel="stylesheet" href="../assets/jquery-ui/jquery-ui.min.css" /><!-- jquery ui css -->
	<link rel="stylesheet" href="../assets/datatables/media/css/jquery.dataTables.min.css" /><!-- css datatables -->
	<link rel="stylesheet" href="../assets/css/style.css" /><!-- csss external -->
	<style>
		#loading{
			/*position: absolute;*/
			background:url(../img/trans_hitam.png); 
			width: 100%;
			min-height: 1000px;
		}
		.container{
			position:absolute;
		}
		.img{
			margin-top: 25%;
			width: 20%;
			height: 20%;
			margin-left:35%;
		}
	</style>
</head>
<body >
	<div class="container" >
		<form action="" method="" enctype="multipart/form-data"  id="data_form">
			<table width="100%" border="1"  >
				<thead>
					<tr>
						<th>ITEM NAMA</th>
						<th>ITEM CODE</th>
						<th>ITEM DESC</th>
						<th>ITEM PRICE</th>
						<th></th>
					</tr>
				</thead>
				<tbody class="data_append">
					<tr >
						<td><input type="text" name="item_nama[]" class="item_nama" required="required" /></td>
						<td><input type="text" name="item_code[]" class="item_code" required="required"/></td>
						<td><input type="text" name="item_desc[]" class="item_desc" required="required"/></td>
						<td><input type="text" name="item_price[]" class="item_price" required="required"/></td>
						<td><button class="btn btn-primary btn-lg add" type="button">ADD</button></td>
					</tr>
				</tbody>
			</table>
			<span class="error"></span> <br />
			<button type="submit" class="btn btn-primary btn-lg save" >save </button>
		</form>	
		<!-- tutup form -->
	</div>


	<div id="loading">
		<!-- <div class="tengah"> -->
		<!-- </div> -->
	</div><br>
	

	

	<!-- javascript -->
	<script src="../assets/jquery-3.2.1.js"></script><!-- jquery -->
	<script src="../assets/bootstrap/js/bootstrap.min.js" ></script><!-- js bootstrap -->
	<script type="text/javascript">
	var idf=1;
    $(document).ready(function() {
    	$("#loading").hide();
    	// alert("halo");
    	// 
    	$(".add").click(function(e){
    		// alert(e);
    		var stre;
				stre='<tr class="ex baris'+idf+'">';
				stre+='<td><input type="text" name="item_nama[]" class="item_nama" placeholder="'+idf+'" required="required"/></td>';
				stre+='<td><input type="text" name="item_code[]" class="item_code" required="required"/></td>';
				stre+='<td><input type="text" name="item_desc[]" class="item_desc" required="required"/></td>';
				stre+='<td><input type="text" name="item_price[]" class="item_price" required="required"/></td>';
				stre+='<td><button class="btn btn-danger btn-lg add" type="button" onclick="removeform('+idf+')">REMOVE</button></td>';
				stre+='</tr>';
	    		$(".data_append").append(stre);	
	    		// idf = (idf-1) + 2;
	    		// idf = (idf-1) + 2;
	    		// 
	    		idf++;

    	});

    	$(".save").click(function(e){
    		e.preventDefault();
    		// $("#loading").show("slow").html("<img src='img/load.gif' height='50' class='img'>");
    		var data=$("#data_form").serialize();
    		// var data=new FormData($("#data_form"));
    		// alert(data);
    		// 
    		var item_nama=$(".item_nama").val();
    		var item_price=$(".item_price").val();
    		var item_code=$(".item_code").val();
    		var item_desc=$(".item_desc").val();
    		if(item_nama==""||item_code==""||item_price==""||item_desc==""){
    			alert("data harus di isi");
    		}else{
	    		$.ajax({
	    			url:"percobaan1_pro.php",
	    			method:"post",
	    			data:data,
	    			cache:false,
	    			beforeSend:function(){
	    					// $(".error").html(hasil);
	    					$("#loading").show("fast").html("<img src='../img/load.gif' height='50' class='img'>");
	    					},
		    		success:function(hasil){
		    				alert(hasil);
		    				// $(".error").html(hasil);
		    				$(".ex").remove();
		    				$(".item_price").val("");
		    				$(".item_nama").val("");
		    				$(".item_desc").val("");
		    				$(".item_code").val("");
		    				$("#loading").hide();
		    			}
	    			
	    		});
	    	}
    	});

     	
    });

		function removeform(idf) {
	    		$(".baris"+idf).remove();
			}
	</script>
</body>
</html>