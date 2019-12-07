<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<?php
if(!$pilot_list) {

return;
}else{?>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">

                    <h3 class="box-title"><i class="fa fa-map-marker"></i>
                        <?php echo $title?>
                    </h3>
                </div>

                <div class="box-body table-responsive">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    <h4 class="text-center">ID</h4>
                                </th>
                                <th>
                                    <h4 class="text-center">Country</h4>
                                </th>
                                <th>
                                    <h4 class="text-center">Name</h4>
                                </th>
                                <th>
                                    <h4 class="text-center">Rank</h4>
                                </th>
                                <th>
                                    <h4 class="text-center">IVAO</h4>
                                </th>
                                <th>
                                    <h4 class="text-center">VATSIM</h4>
                                </th>
                                <th>
                                    <h4 class="text-center">Rank </h4>
                                </th>
                                <th width="10%">
                                    <h4 class="text-center">See Pilot Details</h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
foreach($pilot_list as $pilot)
{
	/*
		To include a custom field, use the following example:

		<td>
			<?php echo PilotData::GetFieldValue($pilot->pilotid, 'VATSIM ID'); ?>
                            </td>

                            For instance, if you added a field called "IVAO Callsign":

                            echo PilotData::GetFieldValue($pilot->pilotid, 'IVAO Callsign');
                            */

                            // To skip a retired pilot, uncomment the next line:
                            if($pilot->retired == 1) { continue; }
                            ?>
                            <tr>
                                <td width="1%" nowrap>
                                        <?php echo PilotData::GetPilotCode($pilot->code, $pilot->pilotid)?>
                                </td>
                                <td width="10%">
                                <span class="flag-icon flag-icon-<?php echo strtolower($pilot->location);?>"></span><span style="margin-left:5px;"><?php echo Countries::getCountryName($pilot->location);?></span>
                                </td>
                                <td>
                                    <?php echo $pilot->firstname.' '.$pilot->lastname?>
                                </td>
                                <td>
                                    <?php echo $pilot->rank;?>
                                </td>
                                <td>
                                    <?php
                                    $ivaoId = PilotData::GetFieldValue($pilot->pilotid, 'IVAO VID');
                                        if($ivaoId < 1){
                                            echo "<span class='text-muted'>Not Linked</span>";
                                        } else {
                                            echo "<span class='text-gren'>".$ivaoId."</span>";
                                        }

			 ?>
                                </td>
                                <td>
                                    <?php
                                    $vatsimId = PilotData::GetFieldValue($pilot->pilotid, 'VATSIM ID');
                                        if($vatsimId < 1){
                                            echo "<span class='text-muted'>Not Linked</span>";
                                        } else {
                                            echo "<span class='text-gren'>".$vatsimId."</span>";
                                        }

			 ?>
                                </td>
                                <td>
                                    <img src="<?php echo $pilot->rankimage?>" alt="<?php echo $pilot->rank;?>" />
                                </td>
                                <td>
                                    <a href="<?php echo url('/profile/view/'.$pilot->pilotid);?>"><div class="btn btn-default btn-rounded btn-sm"><i class="fa fa-eye"></i></div></a>
                                </td>
                                <?php
}
?>
                        </tbody>
                    </table>
                </div>
            </div>
          <?php } ?>
</section>
