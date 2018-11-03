<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>

<div class="login-box">

  <!-- /.login-logo -->
  <div class="login-box-body">
  <div class="login-logo">
    <img src="<?php echo SITE_URL?>/lib/skins/nortesul/img/LogoCrew.png" alt="logo" class="logo-default" width="256px" height="144px" />
  </div>
    <p class="login-box-msg"><h3>Access CrewCenter</h3></p>

    <form action="<?php echo url('/login');?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label class="">
              <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
		  <input type="hidden" name="redir" value="index.php/profile" />
		  <input type="hidden" name="action" value="login" />
          <button type="submit" name="submit" value="submit" class="btn aqua-gradient btn-block btn-rounded z-depth-1a btn-flat">Login</button>
        </div>
        <!-- /.col -->
      </div>
	  <hr>
	  <h4>Forget your password?</h4>
	<p class="h5">
				No pronlems, click <b><a href="<?php echo SITE_URL; ?>/index.php/login/forgotpassword" id="forget-password">
				HERE </a></b>
				to reset your password.
			</p>
				<hr>
	  <div class="social-auth-links text-center">
      <p>Follow our Social Networks:</p>
      <a href="http://www.facebook.com/nortesulvirtual" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Facebook Page</a>
      <a href="https://twitter.com/NortesulV" class="btn btn-block btn-social btn-twitter btn-flat"><i class="fa fa-twitter"></i> Twitter Profile</a>
	  <a href="https://www.instagram.com/nortesulvirtual/" class="btn btn-block btn-social btn-instagram btn-flat"><i class="fa fa-instagram"></i> Instagram Profile</a>
    </div>
    <!-- /.social-auth-links -->
    </form>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
<script src="<?php echo SITE_URL ?>/lib/skins/nortesul/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
