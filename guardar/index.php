<!DOCTYPE html>
<html lang="en">
<head>
	<title>NorteSul Virtual Airlines</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<link href="css/jquery.mb.YTPlayer.css" media="all" rel="stylesheet" type="text/css">


</head>
<body>

	<div class="bg-g1 size1 flex-w flex-col-c-sb p-l-15 p-r-15 p-t-55 p-b-35 respon1">
<!--<iframe src="https://player.vimeo.com/video/308131455?background=1&muted=1autoplay=1&loop=1" id="myVideo" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
-->
<div id="P1" class="player"
     data-property="{videoURL:'http://youtu.be/LCideSflit4',containment:'#P1',startAt:0,mute:false,autoPlay:false,loop:false,opacity:1}">
</div>
<div id="wrapper_bgndVideo" class="mbYTP_wrapper" style="position: fixed; z-index: 0; min-width: 100%; min-height: 100%; left: 0px; top: 0px; overflow: hidden; opacity: 1; background: none; transition-property: opacity; transition-duration: 1500ms;"><iframe id="iframe_bgndVideo" class="playerBox" style="position: absolute; z-index: 0; width: 100%; height: 100%; top: 0px; left: 0px; overflow: hidden; quality: hd720; vol: 75; loop: 5; opacity: 1; user-select: none; margin-top: 0px; margin-left: 0px; max-width: initial;" frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" title="YouTube video player" width=1280" height="720" src="https://www.youtube.com/embed/LCideSflit4?modestbranding=1&amp;autoplay=1&amp;controls=0&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1&amp;version=3&amp;playerapiid=iframe_bgndVideo&amp;origin=*&amp;allowfullscreen=true&amp;wmode=transparent&amp;iv_load_policy=3&amp;cc_load_policy=0&amp;playsinline=0&amp;html5=1&amp;widgetid=1" unselectable="on"></iframe><div class="YTPOverlay" style="position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;"></div></div>
	<span></span>
		<div class="flex-col-c p-t-50 p-b-50" style="z-index: 10;">
			<h3 class="l1-txt1 txt-center p-b-10">
				Welcome to NorteSul / Bem Vindo à NorteSul
			</h3>

			<p class="txt-center l1-txt2 p-b-60">
				Please choose the language below. / Por Favor escolha o idioma abaixo.
			</p>

			<div class="flex-w flex-c cd100 p-b-82">
				<form name="Menu" class="form-group">
 <select id="soflow" onchange="this.options[this.selectedIndex].value &amp;&amp; (window.location = this.options[this.selectedIndex].value);" class="form-control">

  <option value="#">Choose / Escolha

  </option><option value="en/">English

  </option><option value="pt">Portuguese

 </option></select>

</form>
			</div>

		</div>

		<span class="s1-txt2 txt-center" style="z-index: 10;">
			<p>© <?php echo date("Y")?> NorteSul. All Rights Reserved | Developed by  Arthur Hetem</p>
			<p>© <?php echo date("Y")?> NorteSul. Todos Os Direitos Reservados | Desenvolvido por  Arthur Hetem</p>
		</span>

	</div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	<script src="js/jquery.mb.YTPlayer.js"></script>
	<!--<script>
		$('.cd100').countdown100({
			// Set Endtime here
			// Endtime must be > current time
			endtimeYear: 2018,
			endtimeMonth: 12,
			endtimeDate: 23,
			endtimeHours: 0,
			endtimeMinutes: 0,
			endtimeSeconds: 0,
			timeZone: "America/Sao_Paulo"
			// ex:  timeZone: "America/New_York", can be empty
			// go to " http://momentjs.com/timezone/ " to get timezone
		});
	</script>-->
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<script>
jQuery(function(){
		 jQuery("#[P1]").YTPlayer();
	 });
</script>
</body>
</html>
