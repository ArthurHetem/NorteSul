<!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo SITE_URL?>/index.php/profile" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>N</b>S<b>V</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Norte</b>Sul</span>
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
		  <?php if(PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN)) { ?>
		  <!-- Notifications Menu-->
		  <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning"><?php
                                        $pendingpireps = count(PIREPData::findPIREPS(array('p.accepted' => PIREP_PENDING)));
                                        $pendingpilots = count(PilotData::findPilots(array('p.confirmed' => PILOT_PENDING)));
                                        
                                        $count = ($pendingpireps + $pendingpilots);
                                        
                                        if(!$count) {
                                            echo '';
                                        } else {
                                            echo $count ;
                                        }
                                    ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">Notificações aos Admins</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <!-- Pilots -->
                                                <a href="<?php echo SITE_URL?>/admin/index.php/pilotadmin/pendingpilots">
                                                    <i class="fa fa-users text-aqua"></i>
                                                        <span class="mail-desc">Nós Temos <strong><?php echo count(PilotData::GetPendingPilots()); ?></strong> Registros Pendentes</span>
                                                </a>
                  </li>
                  <li>
                    <!-- PIREPs -->
                                                <a href="<?php echo SITE_URL?>/admin/index.php/pirepadmin/viewpending">
                                                      <i class="fa fa-plane text-aqua"></i>
                                                    
                                                        <span class="mail-desc">Nós Temos <strong><?php echo count(PIREPData::GetAllReportsByAccept(PIREP_PENDING)); ?></strong> PIREPs Pendentes</span>
                                                </a>
                  </li>
                </ul>
              </li>
              <li>
                                            <a class="nav-link text-center" href="<?php echo SITE_URL?>/admin"> <strong>Ver Todas</strong> <i class="fa fa-angle-right"></i> </a>
                                        </li>
            </ul>
          </li>
		  <?php } ?>
		  <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success"><?php MainController::Run('Mail', 'GetNotificationMail');?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header"><?php MainController::Run('Mail', 'checkmail'); ?></li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <?php MainController::Run('Mail', 'GetProfileMail', 4);?>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo url('/Mail'); ?>"><strong>Ver Todos</strong> <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </li>
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
				  <small>Pagamento <?php echo FinanceData::FormatMoney($userinfo->totalpay) ?></small>
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
                  <a href="<?php echo SITE_URL?>/../pt/index.php" class="btn btn-default btn-flat">Site</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo SITE_URL?>/../pt/index.php/logout" class="btn btn-default btn-flat">Logout</a>
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
        <li><a href="<?php echo SITE_URL?>/index.php/profile"><i class="fa fa-home"></i> <span>Home</span></a></li>
		<li class="header">OPERAÇÕES DE VOOS</li>
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
            <li><a href="<?php echo SITE_URL?>/index.php/randomflights">Gerar Escala</a></li>
            <li><a href="<?php echo SITE_URL?>/index.php/fltbook">Gerar Charter / Jumpseat</a></li>
          </ul>
        </li>
		<?php
		   }
		  ?>
		<li><a href="<?php echo SITE_URL?>/index.php/wthr"><i class="fa fa-cloud"></i> <span>WX Briefing</span><span class="label label-success pull-right">Novo</span></a></li>
		<li class="header">PERFIL</li>
        <li><a href="<?php echo SITE_URL?>/index.php/profile/editprofile"><i class="fa fa-gear"></i> <span>Editar Perfil</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/pireps/mine"><i class="fa fa-list"></i> <span>Meus Voos</span></a></li>
		<li class="header">OPERACIONAL</li>
		<li><a href="<?php echo SITE_URL?>/index.php/mail"><i class="fa fa-envelope-o"></i> <span>Intra-mail</span></a></li>
		<li><a href="http://nortesulvirtual.com/hesk/"><i class="fa fa-headphones"></i> <span>HelpDesk</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/loa"><i class="fa fa-user-times"></i> <span>Solicitar Afastamento</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/downloads"><i class="fa fa-cloud-download"></i> <span>Downloads</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/events"><i class="fa fa-map"></i> <span>Eventos</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/screenshots"><i class="fa fa-camera"></i> <span>Galeria</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/finances"><i class="fa fa-book"></i> <span>Finanças</span></a></li>
		<li><a href="<?php echo url('/Exams') ?>"><i class="fa fa-graduation-cap"></i> <span>Centro de Exames</span></a></li>
		<li><a href="<?php echo url('/Exams_admin') ?>"><i class="fa fa-gears"></i> <span>Admininstrar Exames</span></a></li>

		<?php
              if(Auth::LoggedIn() && PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN))
              {
                echo '<li><a href="'.fileurl('/admin').'"><i class="fa fa-wrench"></i> <span>Administrar</span></a></li>';
              }
            ?>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>