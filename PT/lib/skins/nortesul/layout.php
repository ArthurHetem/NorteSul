<!DOCTYPE html>
<html lang="en">
  <head>
    <title>NorteSul Virtual Airlines</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900">
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/lib/skins/nortesul/fonts/icomoon/style.css">

    <link rel="stylesheet" href="<?php echo SITE_URL;?>/lib/skins/nortesul/css/magnific-popup.css">
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/lib/skins/nortesul/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/lib/skins/nortesul/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/lib/skins/nortesul/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo SITE_URL;?>/lib/skins/nortesul/css/bootstrap-datepicker.css">


    <link rel="stylesheet" href="<?php echo SITE_URL;?>/lib/skins/nortesul/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="<?php echo SITE_URL;?>/lib/skins/nortesul/css/aos.css">

    <link rel="stylesheet" href="<?php echo SITE_URL;?>/lib/skins/nortesul/css/style.css">
	<link rel="stylesheet" href="<?php echo SITE_URL;?>/lib/skins/nortesul/css/animate.css">
	<style>
	.dropdown li :hover{
		background-color:#FF8235 !important;
		color:#FFF !important;
	}
	</style>
  </head>
  <body>

  <div class="site-wrap">
    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
	<?php Template::Show('app_top.php');?>
	
	<?php echo $page_content; ?>
	
    <?php Template::Show('app_bottom.php');?>
  </div>

  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/jquery-ui.js"></script>
    	<!-- countTo -->
	<script src="<?php echo SITE_URL; ?>/lib/skins/nortesul/js/jquery.countTo.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/popper.min.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/bootstrap.min.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/owl.carousel.min.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/jquery.stellar.min.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/jquery.countdown.min.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/aos.js"></script>
<script src="https://kit.fontawesome.com/73615c336e.js"></script>
  <script src="<?php echo SITE_URL;?>/lib/skins/nortesul/js/main.js"></script>
  	<script type="text/javascript">
  $('.js-counter').countTo();
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
</script>
<script>
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });
    });
</script>
  </body>
</html>
