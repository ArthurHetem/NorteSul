<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<div class="login-box">
  <div class="login-logo">
    <img src="<?php echo SITE_URL?>/lib/skins/nortesul/img/LogoCrew.png" alt="logo" class="logo-default" width="256px" height="144px" />
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Insert your e-mail to request a new password.</p>

    <form action="<?php echo url('/login/forgotpassword');?>" method="post">
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <a href="<?php echo url('/login');?>">Back to Login</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
		  <input type="hidden" name="action" value="resetpass" />
          <button type="submit" name="submit" value="submit" class="btn btn-success btn-block btn-flat">Send</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
