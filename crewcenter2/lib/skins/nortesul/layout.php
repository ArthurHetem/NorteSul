<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="icon" href="<?php echo SITE_URL ?>/lib/skins/nortesul/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CrewCenter&trade; | NorteSul Virtual</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/nortesul/css/bootstrap.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/nortesul/css/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/nortesul/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/nortesul/dist/css/skins/skin-blue.css">
    <!--Switch -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/nortesul/css/switch.css">
  <!-- Circle -->
<link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/nortesul/css/circle.css">
	<!--Animate -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/nortesul/css/animate.css">
  	<!--PACE Theme -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/nortesul/css/pace-theme.css">
    <!--Fonte Logo -->
  <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/nortesul/fonts/stylesheet.css">
  <!-- SweetAlert2 -->
   <link rel="stylesheet" href="<?php echo SITE_URL ?>/lib/skins/nortesul/css/sweetalert2.min.css">
  <!-- MorrisJS -->
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
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
   .norte{
	background-color:#009b3a;
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
 <!--Your Google Maps API Key here-->
    <script src="http://maps.google.com/maps/api/js?v=3&key=AIzaSyDbwylblt3-Nz21yNoDJWbHyqTjTNogYcg&callback=main.CreateMap"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js" type="text/javascript"></script>
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
<body class="<?php if(Auth::LoggedIn()){ echo "hold-transition skin-blue sidebar-mini";} else{ echo "login-page";}?>">
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
    <div class="overlay">
    	<div class="wrap">
    		<h1 class="fonte6"><b>Quick</b> Access</h1>
        <ul class="wrap-nav">
          <li><a href="<?php echo SITE_URL;?>/index.php/Schedules"><i class="fa fa-paper-plane"></i> Reservar voo</a></li>
          <li><a href="<?php echo SITE_URL;?>/index.php/Schedules/bids"><i class="fa fa-plane"></i> Voos reservados</a></li>
          <li><a href="<?php echo SITE_URL;?>/index.php/Schedules"><i class="fa fa-phone"></i> Discord</a></li>
          <li><a href="http://nortesulvirtual.com/hesk/"><i class="fa fa-life-ring"></i> HelpDesk</a></li>
          <li><a href="<?php echo SITE_URL;?>/index.php/logout"><i class="fa fa-power-off"></i> Logout</a></li>
        </ul>
    	</div>
    </div>
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

<!-- jQuery 3 e 2 -->
<script src="<?php echo SITE_URL ?>/lib/skins/nortesul/js/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo SITE_URL ?>/lib/skins/nortesul/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo SITE_URL ?>/lib/skins/nortesul/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="<?php echo SITE_URL ?>/lib/skins/nortesul/js/sweetalert2.min.js"></script>
<!-- PACE -->
<script src="<?php echo SITE_URL ?>/lib/skins/nortesul/js/pace.min.js"></script>
<!-- fastclick -->
<script src="<?php echo SITE_URL ?>/lib/skins/nortesul/js/fastclick.js"></script>
<!-- phpVMS -->
<script type="text/javascript" src="<?php echo SITE_URL ?>/lib/js/phpvms.js"></script>
<script type="text/javascript" src="<?php echo fileurl('lib/js/simbrief.apiv1.js');?>"></script>
<!-- Raphael for MorrisJS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- MorrisJS -->
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<!-- CkEditor-->
<script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
<!-- Tooltip -->
<script src="<?php echo SITE_URL ?>/lib/skins/nortesul/js/tooltip.js"></script>
<script type="text/javascript" src="<?php echo fileurl('lib/js/toppilot.js');?>"></script>
<script>
jQuery.noConflict();
paceOptions = {
  elements: false,
  restartOnRequestAfter: false
}
ClassicEditor
    .create( document.querySelector( '#editor' ) )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );
    jQuery(document).ready(function() {
        jQuery("body").tooltip({ selector: '[data-toggle=tooltip]' });
    });

    $(document).ready(function(){
    $(".button a").click(function(){
        $(".overlay").fadeToggle(200);
       $(this).toggleClass('btn-open').toggleClass('btn-close');
    });
});
$('.overlay').on('click', function(){
    $(".overlay").fadeToggle(200);
    $(".button a").toggleClass('btn-open').toggleClass('btn-close');
    open = false;
});
</script>
<script type="text/javascript">

					var json = (function () {
					var json = null;
					jQuery.ajax({
						'async': false,
						'global': false,
						'url': "http://nortesulvirtual.com/crewcenter2pt/action.php/pilots/morrisstatsbymonthdata",
						'dataType': "json",
						'success': function (data) {
						json = data;
					}
				});
				return json;
				})
			();

		new Morris.Area({
		// ID of the element in which to draw the chart.
		element: 'myfirstchart',
		// Chart data records -- each entry in this array corresponds to a point on
		// the chart.
		data: json,
		// The name of the data record attribute that contains x-values.
		xkey: 'ym',
		// A list of names of data record attributes that contain y-values.
		ykeys: ['total'],
		// Labels for the ykeys -- will be displayed when you hover over the
		// chart.
		labels: ['Flights'],
		behaveLikeLine: true,
		fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors:['#ffffff'],
      pointStrokeColors: ['black'],
      lineColors:['blue']
		});
</script>
</body>
</html>
