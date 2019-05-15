<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" href="<?php echo SITE_URL ?>/lib/skins/avianca/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Avianca Virtual | CrewCenter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/avianca/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/avianca/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/avianca/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/avianca/dist/css/skins/skin-red.min.css">
    <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/avianca/plugins/iCheck/square/red.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 <style>
  .widget{
	 background-color:#DA0808; 
	 color:#FFF;
	 height:80px;
	 width:80px;
   }
   .widget:hover{
	 background-color:#fff; 
	 color:#DA0808;
	 border:1px solid #DA0808;
	 transition-property:background-color color border;
	 transition-duration:0.5s;
	 transition-timing-function:ease-out;
	 transition-delay: 0.1s;
   }
   .cor{
	 color:#DA0808;
   }
   .avianca{
	background-color:#DA0808;
	color:#FFF;
   }
    .btn.aqua-gradient {
		color:#fff;
    background: -webkit-linear-gradient(50deg,#2096ff,#05ffa3)!important;
    background: linear-gradient(40deg,#2096ff,#05ffa3)!important;
    -webkit-transition: .5s ease;
    transition: .5s ease;
}

 </style>
 <script type="text/javascript" src="<?php echo fileurl('lib/js/simbrief.apiv1.js');?>"></script>
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="<?php if(Auth::LoggedIn()){ echo "hold-transition skin-red sidebar-mini";} else{ echo "login-page";}?>">
<div class="<?php if(Auth::LoggedIn()){ echo "wrapper";} else{ echo " ";}?>">
<?php echo $page_htmlreq; ?>
		<?php
		// var_dump($_SERVER['REQUEST_URI']);
		# Hide the header if the page is not the registration or login page
		# Bit hacky, don't like doing it this way
		if (!isset($_SERVER['REQUEST_URI']) || ltrim($_SERVER['REQUEST_URI'],'/') !== SITE_URL.'/index.php/login' || ltrim($_SERVER['REQUEST_URI'],'/') !== SITE_URL.'/index.php/registration') {
			if(Auth::LoggedIn()) {
				Template::Show('app_top.php');
			}
		}
		?>

  <!-- Content Wrapper. Contains page content -->
  <div class="<?php if(Auth::LoggedIn()){ echo "content-wrapper";} else{ echo " ";}?>">
    <?php echo $page_content; ?>
  </div>
  <!-- /.content-wrapper -->
  
  <?php
		# Hide the footer if the page is not the registration or login page
		# Bit hacky, don't like doing it this way
		if (!isset($_SERVER['REQUEST_URI']) || ltrim($_SERVER['REQUEST_URI'],'/') !== SITE_URL.'/index.php/login' || ltrim($_SERVER['REQUEST_URI'],'/') !== SITE_URL.'/index.php/registration') {
			if(Auth::LoggedIn()) {
				Template::Show('app_bottom.php');
			}
		}
		?>
<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="<?php echo SITE_URL ?>/lib/skins/avianca/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo SITE_URL ?>/lib/skins/avianca/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SITE_URL ?>/lib/skins/avianca/dist/js/adminlte.min.js"></script>
<!-- iCheck -->
<script src="<?php echo SITE_URL ?>/lib/skins/avianca/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-red',
      radioClass: 'iradio_square-red',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>				