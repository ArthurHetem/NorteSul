<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>

<div class="login-box pulse animated">
  <div class="login-logo">
    <img src="<?php echo SITE_URL?>/lib/skins/nortesul/img/crew_logo.png" alt="logo" class="logo-default" style="height: 80%; width: 80%;" />
  </div>
    <!-- /.login-logo -->
  <div class="login-box-body">
    <form action="<?php echo url('/login');?>" method="post" class="form-horizontal form-bordered form-control-borderless">
      <div class="input-group">
	  <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
	          <input type="email" name="email" class="form-control" placeholder="Email ou ID de Piloto">
      </div>
	  <hr>
	  <div class="input-group">
	  <span class="input-group-addon"><i class="fa fa-asterisk"></i></span>
	          <input type="password" name="password" class="form-control" placeholder="Senha">
      </div>
      <div class="row bege-espacado">
        <div class="col-xs-8">
			<div class="switch__container">
  <input id="switch-flat" class="switch switch--flat" type="checkbox">
  <label for="switch-flat"></label>
</div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
		  <input type="hidden" name="redir" value="index.php/profile" />
		  <input type="hidden" name="action" value="login" />
          <button type="submit" name="submit" value="submit" class="btn btn-default btn-block btn-rounded" style="margin-top: 10px;"><i class="fa fa-power-off"></i> Logar</button>
        </div>
        <!-- /.col -->
      </div>
	  <hr>
	  <div class="form-group">
	<p class="h6 text-center">
	<a href="<?php echo SITE_URL; ?>/index.php/login/forgotpassword" id="forget-password" class="text-muted">Esqueceu a Senha?</a>
			</p>
			<div class="col-xs-12 text-center">
                    <small>NorteSul Virtual © <?php echo date("Y");?>. Todos os direitos reservados.</small>
                </div>
				</div>
    </form>

   
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->