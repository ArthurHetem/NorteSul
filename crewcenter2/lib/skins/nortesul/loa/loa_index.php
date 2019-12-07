<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-deaf fa-4x text-muted"></i></div>
    <h1>Leave Of <strong>Absence</strong></h1>
    <h1><small>Human Resources Department | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
			<div class="row">
			<div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Our LOA <strong>Policy</strong></h3>
            </div>
			<div class="box-body">
				<ol>
					<li>The pilot must be a member of NorteSul Virtual for at least three (3) months to be entitled to:
					<ol>
						<li><b>Premium license</b>, which is the license granted to riders for reasons of any kind. The license is a privilege, not a right, having a duration of no more than 180 days, whether or not the HR authorize the license.</li>
						<li><b>Military license</b>, which is intended for pilots who at the age of 18, in accordance with Brazilian law were called to serve the nation. We at NorteSul, in gratitude for serving those who have decided to serve the Armed Forces, have granted this license. Maximum license time: 365 days.</li>
					</ol>
					<li>The pilot can return to activities at any time.</li>
					<li>During the leave, the pilot is free to access CrewCenter.</li>
					<li>When the clearance is authorized, the pilot cannot request time extension, having to wait for the time to finish, to request again.</li>
				</li>
				</ol>
				<br>
				<blockquote>
                <p>Name: <?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?></p>
								<p>Rank: <?php echo Auth::$userinfo->rank;?></p>
								<p>Pilot ID: <?php echo PilotData::GetPilotCode(Auth::$userinfo->code, Auth::$userinfo->pilotid) ?></p>
								<p>HUB: <?php echo Auth::$userinfo->hub;?></p>
								<p>Email: <?php echo Auth::$userinfo->email;?></p>
								<p>Account Status: <?php if (Auth::$userinfo->retired = 3){
									echo '<span class="label label-success"><i class="fa fa-check"></i> Active</span>';
								} else{
									echo '<span class="label label-warning"><i class="fa fa-exclamation-triangle"></i> Check with HR</span>';
								}
								?></p>
              </blockquote>
						</div>
						</div>
						</div>
						<div class="col-md-12">
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title">Leave <strong>Form</strong></h3>
									</div>
						<div class="box-body">
<div class="alert alert-danger">
	<p>
	Details regarding your LOA will be e-mailed to you. Please make sure you have the correct e-mail address, if not, change it from the Settings page.
	</p>
</div>
<hr />
<table class="table table-bordered table-striped table-hover">
	<form method="post" action="<?php echo url('/loa/submit');?>">
	<tr>
		<td><strong>Application filed on: </strong></td>
		<td><input class="form-control" disabled value="<?php echo date("d/m/Y"); ?>"></td>
	</tr>
	<tr>
		<td><strong>On leave until: </strong></td>
		<td>

			<select class="form-control" name="day">
				<?php for($i = 1; $i <=31; $i++) {
					echo "<option value='$i'>$i</option>";
				}?>
			</select>

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
		<td>Reason for Leave</td>
		<td><textarea class="form-control" name="reason" cols="25" rows="5"></textarea></td>
	</tr>
	<tr>
		<td colspan=2 align="right"><input type="submit" class="btn btn-rounded btn-info" value="Submit!"/></td>
	</tr>
</table>

</form>
</div>
</div>
</div>
</div>
</section>
