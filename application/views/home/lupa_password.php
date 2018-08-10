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
		background-size: 100%;
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


	.login-page, .register-page
	{
		background: transparent;
	}

	.login-page, .register-page
	{
		padding-top: 30px;
	}

	.login-logo, .register-logo
	{
		margin-bottom: 5px;
	}

	.login-logo p{
		font-family: 'Calibre Bold', Fallback, sans-serif; 
		color: white;
		font-size: 45px;
	}

	.login-box-body, .register-box-body{
		padding-top: 50px;
	

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

	@media screen and (max-width: 1220px)
	{
		html
		{

			/*background: linear-gradient(to right, #43cea2 , #185a9d); /* Standard*/
			
			background-size:  1500px;
			
		} 

	}

</style>

<body class="hold-transition login-page">
	<div class="login-box">
		<div class="login-logo">
			<p>Lupa Password</a>
			</div>
			<!-- /.login-logo -->
			<div class="login-box-body">
			<p style="text-align:center">Untuk melakukan reset password harap memasukkan emaill</p>
				<?php echo form_open('home/lupa_password_function');?>
				<div class="form-group has-feedback">
					<input type="email" name="email" class="form-control" placeholder="email" required>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="row">

					<!-- /.col -->
					<div class="col-xs-12">
						<button type="submit" class="btn-sign">RUBAH PASSWORD</button>
					</div>
					<!-- /.col -->
				</div>
				<?php echo form_close();?>

				<div class="login-bawah">
					<p> <a href="<?php echo base_url('home/'); ?>">Kembali Ke HOME</a></p>
				</div>

				<p style="color:red" align="center"> <?php echo $this->session->flashdata('erroremail'); ?></p> 
				<p style="color:red" align="center"> <?php echo $this->session->flashdata('msg'); ?></p> 
			</div>
			<!-- /.login-box-body -->
		</div>


		<!-- /.login-box -->


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
