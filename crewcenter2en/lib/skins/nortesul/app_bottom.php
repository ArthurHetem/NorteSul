 <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    <strong>Copyright &copy; <?php echo date('Y')?> NorteSul Virtual Airlines.</strong> All Rights Reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
	    <h3 class="control-sidebar-heading">Activity Feed</h3>
        <ul class="control-sidebar-menu">
          <li>
              <i class="menu-icon fa fa-info bg-green"></i>

              <div class="menu-info">

                <p><?php MainController::Run('Activity', 'frontpage', 2); ?></p>
              </div>
          </li>
        </ul>
		<hr>
        <h3 class="control-sidebar-heading">Events</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-play bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Inauguration</h4>

                <p>Was on August/2018</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
        <hr>
        <h3 class="control-sidebar-heading">NorteSul Virtual Goals</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Site
                <span class="pull-right-container">
                    <span class="label label-success pull-right">100%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 100%"></div>
              </div>
            </a>
          </li>
		  <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                CrewCenter
                <span class="pull-right-container">
                    <span class="label label-success pull-right">90%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
         <hr>
		 <div class="tab-pane" id="control-sidebar-settings-tab">
              <h3 class="control-sidebar-heading">General Informations</h3>
                <h3 class="control-sidebar-subheading" align="center">
                 Developed by <a href="https://www.facebook.com/arthur.hetem">Arthur Hetem</a></h3>
                <p align="center">
                  Version 1.0
                </p>
          </div><!-- /.tab-pane -->
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
