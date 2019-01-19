<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript">
jQuery.noConflict(false);
</script>
<li><a href="<?php echo SITE_URL;?>/admin">Dashboard</a></li>
<?php

if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_NEWS)
|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PAGES)
|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_DOWNLOADS)
|| PilotGroups::group_has_perm(Auth::$usergroups, EMAIL_PILOTS)
|| PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_REGISTRATIONS)
)
{
?>
<li class="submenu"><a class="menu" href="#">News & Content <i class="fa fa-caret-down pull-right"></i></a>
	<ul>
		<?php 
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_NEWS)) 
		{ 
		?>
		<li><a href="<?php echo adminurl('/sitecms/viewnews'); ?>">News</a></li>
		<li><a href="<?php echo adminurl('/sitecms/viewnotam'); ?>">NOTAMS</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PAGES)) 
		{
		?>
		<li><a href="<?php echo adminurl('/sitecms/viewpages');?>">Pages</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_DOWNLOADS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/downloads/overview'); ?>">Downloads</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EMAIL_PILOTS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/massmailer');?>">Email all Pilots</a></li>
		<?php 
		}
		?>
  </ul>
</li>
<?php
}

if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_AIRLINES)
|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_FLEET)
|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_SCHEDULES)
|| PilotGroups::group_has_perm(Auth::$usergroups, IMPORT_SCHEDULES)
)
{
	?>
<li class="submenu"><a class="menu" href="?admin=airlines">Airline Operations <i class="fa fa-caret-down pull-right"></i></a>
	<ul>
		<?php
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_AIRLINES)) 
		{
		?>
		<li><a href="<?php echo adminurl('/operations/airlines');?>">Add & Edit Airlines</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_FLEET)) 
		{
		?>
			<li><a href="<?php echo adminurl('/operations/aircraft');?>">Add & Edit Fleet</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_SCHEDULES)) 
		{
		?>
		<li><a href="<?php echo adminurl('/operations/airports');?>">Add & Edit Airports</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_SCHEDULES)) 
		{
		?>
		<li><a href="<?php echo adminurl('/operations/schedules');?>">Flight Schedules & Routes</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, IMPORT_SCHEDULES)) 
		{
		?>
			<li><a href="<?php echo adminurl('/import');?>">Import Schedules</a></li>
			<li><a href="<?php echo adminurl('/import/export');?>">Export Schedules</a></li>
		<?php 
		}
		?>
   </ul>
</li>
<?php
}

if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_REGISTRATIONS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PILOTS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_GROUPS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_RANKS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EMAIL_PILOTS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_AWARDS)
) 
{
	?>
<li class="submenu"><a class="menu" href="#">Pilots & Groups <i class="fa fa-caret-down pull-right"></i></a>
	<ul>
		<?php
		if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_REGISTRATIONS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/pilotadmin/pendingpilots');?>">Pending Registrations</a></li>
		<?php
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PILOTS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/pilotadmin/viewpilots');?>">View All Pilots</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_GROUPS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/pilotadmin/pilotgroups');?>">Pilot Groups</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_RANKS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/pilotranking/pilotranks');?>">Pilot Ranks</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EMAIL_PILOTS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/massmailer'); ?>">Email all Pilots</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_AWARDS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/pilotranking/awards'); ?>">Awards</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, FULL_ADMIN)) 
		{
		?>
			<li><a href="<?php echo adminurl('/maintenance/changepilotid'); ?>">Change a Pilot's ID</a></li>
			<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/pilotadmin/viewbids'); ?>">View Bids</a></li>
		<?php 
		}
		?>
    </ul>
</li>
<?php
}

if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS)
	|| PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PIREPS_FIELDS)
)
{
?>
<li class="submenu"><a class="menu" href="#">Pilot Reports (PIREPS) <i class="fa fa-caret-down pull-right"></i></a>
	<ul>
		<?php 
		if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/pirepadmin/viewpending'); ?>">View Pending</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/pirepadmin/viewrecent'); ?>">View Recent Reports</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/pirepadmin/viewall'); ?>">View All Reports</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PIREPS_FIELDS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/settings/pirepfields'); ?>">PIREP Fields</a></li>
		<?php 
		}
		?>
   </ul>
</li>
<?php
}

if(PilotGroups::group_has_perm(Auth::$usergroups, VIEW_FINANCES)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_EXPENSES)
)
{
?>
<li class="submenu"><a class="menu" href="<?php echo SITE_URL?>/admin/index.php/reports">Reports & Expenses <i class="fa fa-caret-down pull-right"></i></a>
	<ul>
		<?php
		if(PilotGroups::group_has_perm(Auth::$usergroups, VIEW_FINANCES)) 
		{
		?>
		<li><a href="<?php echo adminurl('/reports/overview'); ?>">Overview</a></li>
		<li><a href="<?php echo adminurl('/finance/viewcurrent'); ?>">Financial Reports</a></li>
		<li><a href="<?php echo adminurl('/reports/aircraft'); ?>">Aircraft Reports</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_EXPENSES)) 
		{
		?>
		<li><a href="<?php echo adminurl('/finance/viewexpenses'); ?>">Expenses</a></li>
		<li><a href="<?php echo adminurl('/finance/viewprofits'); ?>">Profits</a></li>
		<?php 
		} 
		?>
  </ul>
</li>
<?php
}

if(PilotGroups::group_has_perm(Auth::$usergroups, FULL_ADMIN)
	|| PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PROFILE_FIELDS)
)
{
	?>
<li class="submenu"><a class="menu" href="#">Site & Settings <i class="fa fa-caret-down pull-right"></i></a>
	<ul>
		<?php 
		if(PilotGroups::group_has_perm(Auth::$usergroups, FULL_ADMIN)) 
		{
?>
		<li><a href="<?php echo adminurl('/settings'); ?>">General Settings</a></li>
		<li><a href="<?php echo adminurl('/maintenance/options'); ?>">Maintenance Options</a></li>
		<li><a href="<?php echo adminurl('/logs'); ?>">Admin Activity Logs</a></li>
		<li><a href="<?php echo adminurl('/templatediffs');?>">Template Diffs</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, EDIT_PROFILE_FIELDS)) 
		{
		?>
		<li><a href="<?php echo adminurl('/settings/customfields'); ?>">Profile Fields</a></li>
		<?php 
		}
		if(PilotGroups::group_has_perm(Auth::$usergroups, FULL_ADMIN)) 
		{
		?>
		<?php
		if(Config::Get('PHPVMS_CENTRAL_ENABLED') == true || Config::Get('VACENTRAL_ENABLED') == true )
			echo '<li><a href="'.adminurl('/vacentral').'">vaCentral Settings</a></li>';
		?>
		<?php 
		}
		?>
		<li><a href="<?php echo adminurl('/dashboard/about');?>">About phpVMS</a></li>
	</ul>
</li>
<?php
}
?>
<?php 
if(strlen($MODULE_NAV_INC) > 0)
{
?>
<li class="submenu"><a class="menu" href="#">Addons <i class="fa fa-caret-down pull-right"></i></a>
	<ul>
	<?php echo $MODULE_NAV_INC; ?>
    </ul>
</li>
<?php
}
?>