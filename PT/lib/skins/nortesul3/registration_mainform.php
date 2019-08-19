<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_1.png)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Registro</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Organização</li>
  <li class="active"><b>Inscreva-se</b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
    <div class="container" id="tourpackages-carousel">
<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<form method="post" action="<?php echo url('/registration');?>">
<dl>
	<dt>Nome: *</dt>
	<dd><input type="text" name="firstname" value="<?php echo Vars::POST('firstname');?>" />
		<?php
			if($firstname_error == true)
				echo '<p class="error">Please enter your first name</p>';
		?>
	</dd>

	<dt>Sobrenome: *</dt>
	<dd><input type="text" name="lastname" value="<?php echo Vars::POST('lastname');?>" />
		<?php
			if($lastname_error == true)
				echo '<p class="error">Please enter your last name</p>';
		?>
	</dd>

	<dt>Email: *</dt>
	<dd><input type="text" name="email" value="<?php echo Vars::POST('email');?>" />
		<?php
			if($email_error == true)
				echo '<p class="error">Please enter your email address</p>';
		?>
	</dd>

	<dt>Companhia Aérea: *</dt>
	<dd>
		<select name="code" id="code">
		<?php/*
		foreach($airline_list as $airline) {
			echo '<option value="'.$airline->code.'">'.$airline->code.' - '.$airline->name.'</option>';
		}*/
		?>
		<option value="NSV">NSV - NorteSul Virtual</option>
		</select>
	</dd>

	<dt>HUB: *</dt>
	<dd>
		<select name="hub" id="hub">
		<?php
		foreach($hub_list as $hub) {
			echo '<option value="'.$hub->icao.'">'.$hub->icao.' - ' . $hub->name .'</option>';
		}
		?>
		</select>
	</dd>

	<dt>País: *</dt>
	<dd><select name="location">
		<?php
			foreach($country_list as $countryCode=>$countryName) {
				if(Vars::POST('location') == $countryCode) {
				    $sel = 'selected="selected"';
				} else {
				    $sel = '';
				}

				echo '<option value="'.$countryCode.'" '.$sel.'>'.$countryName.'</option>';
			}
		?>
		</select>
		<?php
			if($location_error == true) {
                echo '<p class="error">Please enter your location</p>';
			}
		?>
	</dd>

	<dt>Senha: *</dt>
	<dd><input id="password" type="password" name="password1" value="" /></dd>

	<dt>Senha Novamente: *</dt>
	<dd><input type="password" name="password2" value="" />
		<?php
			if($password_error != '')
				echo '<p class="error">'.$password_error.'</p>';
		?>
	</dd>

	<?php

	//Put this in a seperate template. Shows the Custom Fields for registration
	Template::Show('registration_customfields.tpl');

	?>

	<dt>reCaptcha</dt>
	<dd>
            <?php if(isset($captcha_error)){echo '<p class="error">'.$captcha_error.'</p>';} ?>
            <div class="g-recaptcha" data-sitekey="6Le90gkTAAAAACMNeU0l_b7jeRv3XguKlmZIid2x"></div>
            <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang;?>">
            </script>
	</dd>

	<dt></dt>
	<dd><input type="submit" name="submit" value="Register!" /></dd>
</dl>
</form>
</div>