<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Profile</h3>
            </div>
			<div class="box-body">
<form action="<?php echo url('/profile');?>" method="post" enctype="multipart/form-data" role="form">
<dl>
	<dt>Name</dt>
	<dd class="form-control" disabled><?php echo $pilot->firstname . ' ' . $pilot->lastname;?></dd>

	<dt>Airline</dt>
	<dd class="form-control" disabled><?php echo $pilot->code?>
	</dd>

	<dt>E-mail Address</dt>
	<dd><input class="form-control" type="text" name="email" value="<?php echo $pilot->email;?>" />
		<?php
			if(isset($email_error) && $email_error == true)
				echo '<p class="alert alert-danger">Please, insert your e-mail address</p>';
		?>
	</dd>

	<dt>Country</dt>
	<dd><select name="location" class="form-control">
		<?php
		foreach($countries as $countryCode=>$countryName)
		{
			if($pilot->location == $countryCode)
				$sel = 'selected="selected"';
			else
				$sel = '';

			echo '<option value="'.$countryCode.'" '.$sel.'>'.$countryName.'</option>';
		}
		?>
		</select>
		<?php
			if(isset($location_error) &&  $location_error == true)
				echo '<p class="error">Please enter your location</p>';
		?>
	</dd>

	<dt>Forum sign background</dt>
	<dd><select class="form-control" name="bgimage">
		<?php
		foreach($bgimages as $image)
		{
			if($pilot->bgimage == $image)
				$sel = 'selected="selected"';
			else
				$sel = '';

			echo '<option value="'.$image.'" '.$sel.'>'.$image.'</option>';
		}
		?>
		</select>
	</dd>

	<?php
	if($customfields) {
		foreach($customfields as $field) {
			echo '<dt>'.$field->title.'</dt>
				  <dd>';

			if($field->type == 'dropdown') {
				$field_values = SettingsData::GetField($field->fieldid);
				$values = explode(',', $field_values->value);


				echo '<select class="form-control" name=\"{$field->fieldname}\">';

				if(is_array($values)) {

					foreach($values as $val) {
						$val = trim($val);

						if($val == $field->value)
							$sel = " selected ";
						else
							$sel = '';

						echo "<option value=\"{$val}\" {$sel}>{$val}</option>";
					}
				}

				echo '</select>';
			} elseif($field->type == 'textarea') {
				echo '<textarea name="'.$field->fieldname.'" class="customfield_textarea">'.$field->value.'</textarea>';
			} else {
				echo '<input class="form-control" type="text" name="'.$field->fieldname.'" value="'.$field->value.'" />';
			}

			echo '</dd>';
		}
	}
	?>

	<dt>Avatar:</dt>
	<dd><input type="hidden" name="MAX_FILE_SIZE" value="<?php echo Config::Get('AVATAR_FILE_SIZE');?>" />
		<input class="form-control" type="file" name="avatar" size="40">
		<p>Your image will be resized to <?php echo Config::Get('AVATAR_MAX_HEIGHT').'x'.Config::Get('AVATAR_MAX_WIDTH');?>px</p>
	</dd>
	<dt>Actual Avatar:</dt>
	<dd><?php
			if(!file_exists(SITE_ROOT.AVATAR_PATH.'/'.$pilotcode.'.png')) {
				echo 'Nothing selected';
			} else {
		?>
			<img src="<?php	echo SITE_URL.AVATAR_PATH.'/'.$pilotcode.'.png';?>" /></dd>
		<?php
		}
		?>
	<dt></dt>
	<dd><input type="hidden" name="action" value="saveprofile" />
		<input class="btn btn-info btn-block btn-flat" type="submit" name="submit" value="Save Changes" /></dd>
</dl>
</form>
</div>
</div>
</div>
			<div class="col-xs-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Change Password</h3>
            </div>
			<div class="box-body">
<form action="<?php echo url('/profile');?>" method="post">
                        <div class="form-group">
                            <label>Old Password</label>
                            <input type="password" name="oldpassword" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" id="password" name="password1" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="password" name="password2" class="form-control" value="">
                        </div>
                        <input type="hidden" name="action" value="changepassword" />
		                <input type="submit" name="submit" class="btn btn-info btn-flat btn-block" value="Save Password" /><br><br>
                    </form>
</div>
</div>
</div>
</div>
</section>
