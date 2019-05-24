<!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo SITE_URL?>/index.php/profile" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini fonte"><b>N</b>S<b>V</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg fonte"><img src="<?php echo SITE_URL;?>/lib/skins/nortesul/img/nsv.png" style="height: 75%; width:auto;"></span>
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
              <?php
                                        $pendingpireps = count(PIREPData::findPIREPS(array('p.accepted' => PIREP_PENDING)));
                                        $pendingpilots = count(PilotData::findPilots(array('p.confirmed' => PILOT_PENDING)));

                                        $count = ($pendingpireps + $pendingpilots);

                                        if(!$count) {
                                            echo '';
                                        } else {
                                            echo '
                                            <div class="notify">
            								    <span class="heartbit"></span>
            								    <span class="point"></span>
            								</div>';
                                        }
                                    ?>
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
                    <?php MainController::Run('Mail', 'GetProfileMail', 6);?>
                </ul>
              </li>
              <li class="footer"><a href="<?php echo url('/Mail'); ?>"><strong>Ver Todos</strong> <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </li>

          <li  class="dorpdown messages-menu button">
    		  <a href="javascript:void(0)">
            <i class="fa fa-flash"></i></a>
    		</li>
		  <li class="dorpdown messages-menu">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><div id="horazulu" class="textohorazulu"><script>  var myVar = setInterval(myTimer ,1000);
    function myTimer() {
        var d = new Date(), displayDate;
       if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
          displayDate = d.toLocaleTimeString('pt-BR');
       } else {
          displayDate = d.toLocaleTimeString('pt-BR', {timeZone: 'GMT'});
       }
          document.getElementById("horazulu").innerHTML = displayDate + "z";
    }</script></div></a>
		</li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-share-alt"></i></a>
          </li>
          <!-- User Account Menu -->
          <li class="dropdown user user-menu notifications-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs h5"><i class="fa fa-chevron-down"></i></span>
            </a>
            <ul class="dropdown-menu">
              <li class="header text-center">Conta</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="<?php echo SITE_URL;?>/index.php/Mail">
                      <i class="fa fa-envelope text-muted"></i> Mensagens
                    </a>
                  </li>
                  <li>
                    <a href="http://nortesulvirtual.com//hesk">
                      <i class="fa fa-life-ring text-muted"></i> HelpDesk
                    </a>
                  </li>
                  <li>
                    <a href="<?php echo SITE_URL;?>/index.php/profile">
                      <i class="fa fa-user text-muted"></i> Perfil
                    </a>
                  </li>

                  <li>
                    <a href="<?php echo SITE_URL;?>/index.php/profile/editprofile">
                      <i class="fa fa-cog text-muted"></i> Configurações
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-power-off text-muted"></i> Logout
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
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
      <div class="user-panel bg-gray">
        <div class="pull-left image">
          <img src="<?php echo PilotData::getPilotAvatar($pilotcode); ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?></p>
          <!-- Status -->
      <a href="<?php echo SITE_URL?>/index.php/profile/view/<?php echo $pilotcode; ?>" data-toggle="tooltip" title="Perfil"><i class="fa fa-user fa-1-5x"></i></a>
		  <a href="<?php echo SITE_URL?>/index.php/Mail" data-toggle="tooltip" title="Mesnsagens"><i class="fa fa-envelope fa-1-5x"></i></a>
		  <a href="<?php echo SITE_URL?>/index.php/Profile/editprofile" data-toggle="tooltip" title="Configurações"><i class="fa fa-cog fa-1-5x"></i></a>
		  <a href="<?php echo SITE_URL?>/../pt/index.php/logout" data-toggle="tooltip" title="Logout"><i class="fa fa-sign-out fa-1-5x"></i></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu espaca-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo SITE_URL?>/index.php/profile"><i class="fa fa-home"></i> <span>Home</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/Mail"><i class="fa fa-envelope-o"></i> <span>iMail</span></a></li>
		<li><a href="http://nortesulvirtual.com/hesk/"><i class="fa fa-life-ring"></i> <span>HelpDesk</span></a></li>
		<li class="treeview">
          <a href="#"><i class="fa fa-plane"></i> <span>Operações de voo <span class="label label-success">New</span></span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo SITE_URL?>/index.php/schedules">Centro de operações de voos</a></li>
            <li><a href="<?php echo SITE_URL?>/index.php/cargoops">Cargo operations center <span class="label label-success pull-right">New</span></a></li>
            <li><a href="<?php echo SITE_URL?>/index.php/wthr">WX briefing room</a></li>
			<li><a href="<?php echo SITE_URL?>/index.php/schedules/bids">Flight briefing room</a></li>
			<li><a href="<?php echo SITE_URL?>/index.php/Pireps/mine">Logbook na companhia</a></li>
			<li><a href="<?php echo SITE_URL?>/index.php/loa">Solicitar afastamento</a></li>
          </ul>
        </li>
		<li><a href="<?php echo SITE_URL?>/index.php/events"><i class="fa fa-calendar"></i> <span>Centro de eventos</span></a></li>
		<li><a href="<?php echo SITE_URL?>/index.php/profile"><i class="fa fa-globe"></i> <span>Centro de tours</span></a></li>
		<li class="treeview">
          <a href="#"><i class="fa fa-users"></i> <span>Organização</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo SITE_URL?>/index.php/staff">Time de staffs</a></li>
            <li><a href="<?php echo SITE_URL?>/index.php/pilots">Lista de pilotos</a></li>
			<li><a href="<?php echo SITE_URL?>/index.php/timeline">Linha do tempo</a></li>
			<li><a href="<?php echo SITE_URL?>/index.php/finances">Finanças</a></li>
			<li><a href="<?php echo SITE_URL?>/index.php/rank">Rankings</a></li>
			<li><a href="<?php echo SITE_URL?>/index.php/partners">Parceiros</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#"><i class="fa fa-cloud"></i> <span>Utilidades</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo SITE_URL;?>/index.php/downloads">Downloads</a></li>
            <li><a href="<?php echo SITE_URL;?>/index.php/livestream">Livestream</a></li>
			<li><a href="<?php echo SITE_URL?>/index.php/screenshots">Centro de screenshots</a></li>
          </ul>
        </li>
		<li class="treeview">
          <a href="#"><i class="fa fa-thumbs-o-up"></i> <span>Comunidade</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="https://discord.gg/aVdQQcq">Discord</a></li>
            <li><a href="https://www.facebook.com/nortesulvirtual/" target="_blank">Facebook</a></li>
			<li><a href="https://www.instagram.com/nortesulvirtual/" target="_blank">Instagram</a></li>
          </ul>
        </li>
		<li><a href="<?php echo url('/Documentation');?>"><i class="fa fa-book"></i> <span>Documentos</span></a></li>
		<li><a href="<?php echo url('/toppilot');?>"><i class="fa fa-trophy"></i> <span>Leaderboards</span></a></li>
		<li><a href="<?php echo url('/Exams') ?>"><i class="fa fa-graduation-cap"></i> <span>NSV Academy</span></a></li>
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
