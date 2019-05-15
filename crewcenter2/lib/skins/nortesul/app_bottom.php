 <!-- Main Footer -->
  <footer class="main-footer">
    <!-- Default to the left -->
    CrewCenter v2 Pro &copy; AHsystems
      <div class="pull-right hidden-xs">
          Criado com <i class="fa fa-heart text-red"></i> para a <a href="http://nortesulvirtual.com" class="text-red">NorteSul Virtual</a>
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Online <i class="fa fa-circle text-success"></i></h3>
        <ul class="control-sidebar-menu">
          <?php

$usersonline = StatsData::UsersOnline();
?>


<?php
$shown = array();
foreach($usersonline as $pilot)
{

if(in_array($pilot->pilotid, $shown))
continue;
else
$shown[] = $pilot->pilotid;

echo "<li>";
echo '<img src="'.PilotData::getPilotAvatar($pilotid).'" class="img-circle" width="30px" height="auto" style="border: 1px solid white; margin-left: 10px;" />';
echo " {$pilot->firstname} {$pilot->lastname}";
echo "</li>";

}

?>

        </ul>
        <!-- /.control-sidebar-menu -->
        <hr>
        <h3 class="control-sidebar-heading">Última noticia</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
            <?php PopUpNews::PopUpNewsList(1); ?>
          </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
