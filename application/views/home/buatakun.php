<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mata Daun</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url('asset/bower_components/bootstrap/dist/css/bootstrap.min.css');?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('asset/bower_components/font-awesome/css/font-awesome.min.css');?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('asset/bower_components/Ionicons/css/ionicons.min.css');?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('asset/dist/css/AdminLTE.min.css');?>">
	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url('asset/plugins/iCheck/square/blue.css');?>">

	<!-- jQuery 3 -->
	<script src="<?php echo base_url('asset/bower_components/jquery/dist/jquery.min.js');?>"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo base_url('asset/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
	<!-- iCheck -->
	<script src="<?php echo base_url('asset/plugins/iCheck/icheck.min.js');?>"></script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<!-- Google Font -->
	<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"> -->
</head>

<style type="text/css">

	@font-face 
	{
		font-family: 'Montserrat Regular';
		src: url('<?php echo base_url('asset/tampilan_utama/fonts/montserratregular.eot');?>'); /* IE9 Compat Modes */
		src: url('<?php echo base_url('asset/tampilan_utama/fonts/montserratregular.eot?#iefix');?>') format('embedded-opentype'), /* IE6-IE8 */
		url('<?php echo base_url('asset/tampilan_utama/fonts/montserratregular.woff');?>') format('woff'), /* Pretty Modern Browsers */
		url('<?php echo base_url('asset/tampilan_utama/fonts/montserratregular.ttf');?>')  format('truetype'), /* Safari, Android, iOS */   
		url('<?php echo base_url('asset/tampilan_utama/fonts/montserratregular.svg#svgFontName');?>') format('svg'); /* Legacy iOS */    
	}

	@font-face 
	{
		font-family: 'Calibre Bold';
		src: url('<?php echo base_url('asset/tampilan_utama/fonts/calibrebold.eot');?>'); /* IE9 Compat Modes */
		src: url('<?php echo base_url('asset/tampilan_utama/fonts/calibrebold.eot?#iefix');?>') format('embedded-opentype'), /* IE6-IE8 */
		url('<?php echo base_url('asset/tampilan_utama/fonts/calibrebold.woff');?>') format('woff'), /* Pretty Modern Browsers */
		url('<?php echo base_url('asset/tampilan_utama/fonts/calibrebold.ttf');?>')  format('truetype'), /* Safari, Android, iOS */   
		url('<?php echo base_url('asset/tampilan_utama/fonts/calibrebold.svg#svgFontName');?>') format('svg'); /* Legacy iOS */    
	}


	html
	{

		/*background: linear-gradient(to right, #43cea2 , #185a9d); /* Standard*/
		background-image: url('<?php echo base_url('asset/tampilan_utama/img/bg.jpg');?>');
		/*background-size: 100%;*/
		background-repeat: no-repeat;
	}  
	body
	{
		font-family: 'Montserrat Regular', Fallback, sans-serif;
	}


	a
	{
		color: #11998e;
	}

	a:focus,a:hover{
		color: #38ef7d;
	}

	.login-box, .register-box{
		margin-bottom: 0;
		margin-top: 3% auto;
	}


	.login-page, .register-page
	{
		background: transparent;
	}

	

	.login-logo, .register-logo
	{
		margin-bottom: 5px;
	}

	.login-logo p{
		font-family: 'Calibre Bold', Fallback, sans-serif; 
		color: white;
		font-size: 40px;
	}

	.login-box-body, .register-box-body{
		padding-top: 50px;
		padding-bottom: 50px; 

	}

	.btn-sign
	{
		background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#38ef7d), to(#11998e));
		background: -webkit-linear-gradient(0% 0%, 0% 100%, from(#38ef7d), to(#11998e));
		background: -moz-linear-gradient(center top, #38ef7d, #11998e);
		color: white;
		border: none;
		width: 100%;
		padding-top :10px;
		padding-bottom: 5px;
		font-family: 'Calibre Bold', Fallback, sans-serif; 
		font-size: 20px;
	}

	.login-bawah{
		padding-top: 20px;
		text-align: center;
	}

	@media screen and (min-width: 1441px)
	{
		html
		{

			/*background: linear-gradient(to right, #43cea2 , #185a9d); /* Standard*/
			
			background-size:  100%;

		} 

	}

</style>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<p style="">Buat Akun Mata Daun</p>
		</div>
		<!-- /.login-logo -->
		<div class="login-box-body">

			<?php echo form_open('home/buatAkun_function');?>
			<div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="Username" id="username_id" name="username" required>	
			</div>
			<div class="form-group has-feedback">
				<input type="password" class="form-control" placeholder="Password" id="password_id" name="password" required>
			</div>
			<div class="form-group has-feedback">
				<input type="text" class="form-control" placeholder="Nama Lengkap" id="namalengkap_id" name="nama_lengkap" required>	
			</div>
			<div class="form-group has-feedback">
				<input type="number" class="form-control" placeholder="No Telp" name="no_telp" id="notelp_id" required>			
			</div>
			<div class="form-group has-feedback">
				<input type="number" class="form-control" placeholder="No KTP" id="noktp_id" name="no_ktp" required>	
			</div>
			<div class="form-group has-feedback">
				<input type="email" class="form-control" placeholder="Email" id="email_id" name="email" required>	
			</div>

			<div class="row">

				<!-- /.col -->
				<div class="col-xs-12">
					<button type="submit" class="btn-sign">BUAT</button>
				</div>

				<p style="color:red" align="center"> <?php echo $this->session->flashdata('errorada'); ?></p> 
				<p style="color:green" align="center"> <?php echo $this->session->flashdata('sukses'); ?></p> 

				<!-- /.col -->
			</div>
			<?php echo form_close();?>


			<div class="login-bawah">
				<p>sudah punya Akun ? <a href="<?php echo base_url('home/login'); ?>">Klik Disini</a> </p>
				<p> <a href="<?php echo base_url('home/'); ?>">Kembali Ke HOME</a></p>
			</div>

		</div>
		<!-- /.login-box-body -->
	</div>
	<!-- /.login-box -->

	<script>
		$('form').submit(function() {
			var res = true;
			var username = $('#username_id').val();
			var password = $('#password_id').val();
			var nama_lengkap = $('#namalengkap_id').val();
			var no_telp = $('#notelp_id').val();
			var no_ktp = $('#noktp_id').val();
			var email_id = $('#email_id').val();
     // here I am checking for textFields, password fields, and any 
     // drop down you may have in the form


     

     if(username.toString().length<6){
     	alert('username harus lebih dari 6 karakter');
     	res=false;
     }

     else if(password.toString().length<8)
     {
     	res=false;
     	alert('password harus lebih dari 8 karakter');

     }

     else if(no_telp.toString().length<6||no_telp.toString().length>15){
     	alert('nomor telp minimal 6 digit dan maksimal 15 digit');
     	res=false;
     }

     else if(no_ktp.toString().length!=16){
     	alert('nomor ktp harus 16 digit');
     	res=false;
     }
     
     return res; // returning false will prevent the form from submitting.
 });
</script>

<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' /* optional */
		});
	});
</script>
</body>
</html>
