﻿    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
             Registro
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="pull-right">
              <h1 class="pequeno">Avianca Virtual</h1>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <div class="container" id="tourpackages-carousel">
        <form method="post" action="<?php echo url('/registration');?>">
<dl>
	<dt>First Name: *</dt>
	<dd><input type="text" name="firstname" value="<?php echo Vars::POST('firstname');?>" />
		<?php
			if($firstname_error == true)
				echo '<p class="error">Please enter your first name</p>';
		?>
	</dd>

	<dt>Last Name: *</dt>
	<dd><input type="text" name="lastname" value="<?php echo Vars::POST('lastname');?>" />
		<?php
			if($lastname_error == true)
				echo '<p class="error">Please enter your last name</p>';
		?>
	</dd>

	<dt>Email Address: *</dt>
	<dd><input type="text" name="email" value="<?php echo Vars::POST('email');?>" />
		<?php
			if($email_error == true)
				echo '<p class="error">Please enter your email address</p>';
		?>
	</dd>

	<dt>Select Airline: *</dt>
	<dd>
		<select name="code" id="code">
		<?php
		foreach($airline_list as $airline) {
			echo '<option value="'.$airline->code.'">'.$airline->code.' - '.$airline->name.'</option>';
		}
		?>
		</select>
	</dd>

	<dt>Hub: *</dt>
	<dd>
		<select name="hub" id="hub">
		<?php
		foreach($hub_list as $hub) {
			echo '<option value="'.$hub->icao.'">'.$hub->icao.' - ' . $hub->name .'</option>';
		}
		?>
		</select>
	</dd>

	<dt>Location: *</dt>
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

	<dt>Password: *</dt>
	<dd><input id="password" type="password" name="password1" value="" /></dd>

	<dt>Enter your password again: *</dt>
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

	<dt>Complete o reCaptcha</dt>
	<dd>
            <?php if(isset($captcha_error)){echo '<p class="error">'.$captcha_error.'</p>';} ?>
            <div class="g-recaptcha" data-sitekey="6Le90gkTAAAAACMNeU0l_b7jeRv3XguKlmZIid2x"></div>
            <script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $lang;?>">
            </script>
	</dd>

	<dt></dt>
	<dd><p>Clicando Em Registrar, você está ciente dos termos de candidatura</p></dd>
	<dt></dt>
	<dd><input type="submit" name="submit" value="Register!" /></dd>
</dl>
</form>
      <!-- End container -->
    </div>