<!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo SITE_URL?>/index.php/profile" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>O</b>N<b>E</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Avianca</b>Virtual</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php MainController::Run('Mail', 'checkmail'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"><h4>Você Tem <span class="bold"><?php MainController::Run('Mail', 'checkmail'); ?> Novas</span> Mensagens</h4></li>
              <li class="footer"><a href="<?php echo SITE_URL?>/index.php/mail">Ver</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->
		  
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>" class="img-circle" alt="User Image">

                <p>
                  <?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?> - <?php echo Auth::$userinfo->rank;?>
                  <small>Membro Desde <?php echo date(DATE_FORMAT, strtotime($userinfo->joindate));?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <?php echo Auth::$userinfo->totalflights?> Voos
                    </div>
                    <div class="col-xs-4 text-center">
                      <?php echo Auth::$userinfo->totalhours;?> Horas
                    </div>
                    <div class="col-xs-4 text-center">
                      <?php echo $userinfo->hub?>
                    </div>
                  </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?php echo SITE_URL?>/../PT/index.php" class="btn btn-default btn-flat">Site</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo SITE_URL?>/../PT/index.php/logout" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-reorder"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="<?php echo SITE_URL?>/index.php/profile"><i class="fa fa-home"></i> <span>Home</span></a></li>
		<li class="header">SISTEMAS DE VOOS</li>
		<?php
          $contabids = SchedulesData::GetBids(Auth::$pilot->pilotid);
		  $bidscontados = COUNT($contabids);

    if ($bidscontados > 0)
		{
			echo $bidsconstados;
		}
		else
		{
			$bidsconstados =  "0";
		}
	      if($bidscontados >0){
		?>
		<li><a href="<?php echo SITE_URL?>/index.php/schedules/bids"><i class="fa fa-plane"></i> <span>Escala Reservada<span class="label label-danger pull-right"><?php echo $bidscontados ;?></span></span></a></li>
		<?php
		  }
		  else
		  {
		  ?>
	    <li class="treeview">
          <a href="#"><i class="fa fa-plane"></i> <span>Despacho de Voos</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Gerar Escala<span class="label label-danger pull-right-container">INOP</span></a></li>
            <li><a href="<?php echo SITE_URL?>/index.php/fltbook">Gerar Charter</a></li>
			<li><a href="<?php echo SITE_URL?>/index.php/realschedulelite">Jumpseat</a></li>
          </ul>
        </li>
		<?php
		   }
		  ?>
        <li><a href="#"><i class="fa fa-file-o"></i> <span>Cartas Aéreas</span></a></li>
		<li class="header">PERFIL</li>
        <li class="treeview">
          <a href="#"><i class="fa fa-gear"></i> <span>Opções de Perfil</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo SITE_URL?>/index.php/profile/editprofile">Editar Perfil</a></li>
            <li><a href="<?php echo SITE_URL?>/index.php/profile/changepassword">Alterar Senha</a></li>
          </ul>
        </li>
		<li class="header">OPERACIONAL</li>
		<li><a href="<?php echo SITE_URL?>/index.php/acars"><i class="fa fa-paper-plane-o"></i> <span>Tracking</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/mail"><i class="fa fa-envelope-o"></i> <span>Intra-mail</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/helpdesk"><i class="fa fa-headphones"></i> <span>HelpDesk <span class="label label-danger pull-right">INOP</span></span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/loa"><i class="fa fa-user-times"></i> <span>Solicitar Afastamento</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/downloads"><i class="fa fa-cloud-download"></i> <span>Downloads</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/events"><i class="fa fa-map"></i> <span>Tours</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/finances"><i class="fa fa-book"></i> <span>Finanças</span></a></li>
		<?php
              if(Auth::LoggedIn() && PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN))
              {
                echo '<li><a href="'.fileurl('/admin').'"><i class="fa fa-wrench"></i> <span">Administrar</span></a></li>';
              }
            ?>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>