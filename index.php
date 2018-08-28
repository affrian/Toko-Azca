<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<html lang="en">
<head>
  <meta charset="UTF-8">
   <!-- <link rel="shortcut icon" type="image/x-icon" href="../img/img_default/browser.ico" /> -->
  <title>Login|Toko Azca</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- <link rel="shortcut icon" href="../img/logo_dawoo3.jpg"> -->
  	<link rel="stylesheet" href="assets/css/style_login1.css">
  	<link rel="shortcut icon" type="image/x-icon" href="img/logo.png" />
 	

	<style>
		body{
			background: url("img/danau.jpg");
		}
		#content{
			position: absolute!important;
			margin-left: 25%;
		}
		#lgn_user,#lgn_pass{
			text-transform:uppercase;
		}
	</style>
</head>

<body>

<div class="container" id="con">
	<div id="loading" style="background:url('img/trans_hitam.png');width: 100%;color: red;height: 100%;position: absolute;z-index: 1;display: none;">
			<center><img src="img/load.gif" alt="" style="margin-top: 4%;" /></center>
	</div>
	<!-- form login -->
	<section id="content">
		<p>Toko Azca </p>
		<form action="" method="" enctype="multipart/form-data">
			<h1>Login Form</h1>
			<div>
				<input name="text" type="text" placeholder="Masukan username" required="required" id="lgn_user" autocomplete="off" />
			</div>
			<div>
				<input name="password" type="password" placeholder="Password" required="required" id="lgn_pass" autocomplete="off"/>
			</div>
			<div>
				<input type="button" value="Log in" name="login" id="login" />
			</div>
		</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->


</body>
  
   <!-- javascript -->
	<script src="assets/jquery-3.2.1.js"></script><!-- jquery -->
	<script src="assets/js/jsbuild.js"></script>
	<script src="assets/jquery-divider/number-divider.min.js"></script><!-- divider -->
</body>
</html>

