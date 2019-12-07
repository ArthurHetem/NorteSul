<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<script type='text/javascript'>$(window).load(function(){
    Swal({
  title: 'Oops!',
  text: '<?php echo $message;?>',
  type: 'error',
  heightAuto: true
}).then(function() {
    window.location = "<?php echo SITE_URL;?>/index.php/login";
});
  });</script>