<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<section class="content container-fluid">
			<div class="row">
			<div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Programa de recrutamento de Staffs</h3>
            </div>
			<div class="box-body">
<form method="post" action="<?php echo url('/application'); ?>">

  <table width="100%" border="0"class="table table-bordered">
    <tr>
      <td><strong>Nome: *</strong></td>
      <td>
		<?php
		if(Auth::LoggedIn())
		{
			echo Auth::$userinfo->firstname .' '.Auth::$userinfo->lastname;
			echo '<input type="hidden" name="name" 
					value="'.Auth::$userinfo->firstname 
							.' '.Auth::$userinfo->lastname.'" />';
		}
		else
		{
		?>
		<?php
		}
		?>
      </td>
    </tr>
    <tr>
		<td width="1%" nowrap><strong>ID Piloto: *</strong></td>
		<td>
		<?php
		if(Auth::LoggedIn())
		{
			echo Auth::$userinfo->pilotid;
			echo '<input type="hidden" name="pilotid" 
					value="'.Auth::$userinfo->pilotid.'" />';
		}
		else
		{
		?>
		<?php
		}
		?>
		</td>
	</tr>
	<!-- Do Not remove this hidden input -->
		<input id="subject" type="text" name="subject" size="25" value="<?php echo $_POST['subject'];?>" style="display: none;" />&nbsp;
	<!-- End Hidden Input -->
	<tr>
		<td><strong>Departamento: *</strong></td>
	<td>
		<select name="positions" style="width: 340px;" class="form-control">
  		<option value="Chief Operations Officer" disabled="disabled">Chief Operations Officer</option>
 		<option value="Recursos Humanos">Recursos Humanos</option>
  		<option value="Rotas e Aeroportos">Rotas e Aeroportos</option>
		<option value="Eventos">Eventos</option>
		<option value="Frota">Frota</option>
		<option value="Marketing e Criação">Marketing e Criação</option>
		</select></td>
	</tr>

	<tr>
		<td width="40%"><strong>Conte-nos sobre sua experiência prévia em V.As: *</strong></td>
		<td><textarea name="message1" cols='45' rows='5' class="form-control"><?php echo $_POST['message'];?></textarea></td>
	
	</tr>
    <tr>
      <td><strong>Por que deveriamos escolhe-lo para esse departamento?: *</strong></td>
      <td>
		<textarea name="message2" cols='45' rows='5' class="form-control"><?php echo $_POST['message'];?></textarea>
      </td>
    </tr>
    <tr>
      <td><strong>Você tem alguma experiência no mundo real?: (Opcional)</strong></td>
      <td>
		<textarea name="message3" cols='45' rows='5' class="form-control"><?php echo $_POST['message'];?></textarea>
      </td>
    </tr>
    <tr>
      <td><strong>Conte-nos sobre você (Hobby, gostos, personalidade):</strong></td>
      <td>
		<textarea name="message4" cols='45' rows='5' class="form-control"><?php echo $_POST['message'];?></textarea>
      </td>
    </tr>
	<tr>
      <td><strong>Idade:</strong></td>
      <td>
		<input type="text" name="idade" class="form-control"><?php echo $_POST['idade'];?></textarea>
      </td>
    </tr>
    <tr>
		<td width="1%" nowrap><strong>Captcha</strong></td>
		<td>
		<?php if(isset($captcha_error)){echo '<p class="error">'.$captcha_error.'</p>';} ?>
        <div class="g-recaptcha" data-sitekey="6Le90gkTAAAAACMNeU0l_b7jeRv3XguKlmZIid2x"></div>
        <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=pt-br">
        </script>
		</td>
	</tr>
	
    <tr>
		<td>
			<input type="hidden" name="loggedin" value="<?php echo (Auth::LoggedIn())?'true':'false'?>" />
		</td>
		<td>
          <input type="submit" name="submit" value='Enviar' class="btn btn-primary btn-block">
		</td>
    </tr>
  </table>
</form>
</div>
</div>
</div>
</div>
</section>