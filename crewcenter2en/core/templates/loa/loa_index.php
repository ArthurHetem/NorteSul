<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Request Leave of Absence</h3>
            </div>
			<div class="box-body">
           	<div class="alert alert-info">
	<p>Welcome to the Leave of Absence Form. </p>
</div>
        Your informations: <br/>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<td><strong>Name</strong></td>
		<td><?php echo Auth::$userinfo->firstname;  ?></td>
	</tr>
	<tr>
		<td><strong>Last Name</strong></td>
		<td><?php echo Auth::$userinfo->lastname;  ?></td>
	</tr>
	<tr>
		<td><strong>E-mail</strong></td>
		<td><?php echo Auth::$userinfo->email;  ?></td>
	</tr>
	<tr>
		<td><strong>Pilot ID</strong></td>
		<td><?php echo PilotData::GetPilotCode(Auth::$userinfo->code, Auth::$userinfo->pilotid) ?> </td>
	</tr>
</table>

<div class="alert alert-info">
	<p>
		The LoA* will start at the date that this form has been sent and will end at the user chosen date but not to exceed more than 30 days.
After that time you will be subject to our inactivity policy.
<small>*Subject to Approval</small>
	</p>
</div>
<hr />
<table class="table table-bordered table-striped table-hover">
	<form method="post" action="<?php echo url('/loa/submit');?>">
	<tr>
		<td><strong>Start Date: </strong></td>
		<td><?php echo date("Y-m-d"); ?></td>
	</tr>
	<tr>
		<td><strong>End Date: </strong></td>
		<td>

			<select class="form-control" name="month">
			<option value='1'>January</option>
			<option value='2'>February</option>
			<option value='3'>March</option>
			<option value='4'>April</option>
			<option value='5'>May</option>
			<option value='6'>June</option>
			<option value='7'>July</option>
			<option value='8'>August</option>
			<option value='9'>September</option>
			<option value='10'>October</option>
			<option value='11'>November</option>
			<option value='12'>December</option>
			</select>

			<select class="form-control" name="day">
				<?php for($i = 1; $i <=31; $i++) {
					echo "<option value='$i'>$i</option>";
				}?>
			</select>

			<select class="form-control" name='year'>

					<?php $year = date('Y');
						  $year_end = $year + 5;

							 for($i = $year ; $i < $year_end; $i++) {
							echo "<option value='$i'>$i</option>";
						}?>
			</select>
		</td>
	</tr>
	<tr>
		<td><strong>Reason: </strong></td>
		<td><textarea class="form-control" name="reason" cols="25" rows="5"></textarea></td>
	</tr>
	<tr>
		<td colspan=2 align=center><input type="submit" class="btn btn-flat btn-info btn-block" value="Send"/></td>
	</tr>
</table>

</form>
</div>
</div>
</div>
</div>
</section>
