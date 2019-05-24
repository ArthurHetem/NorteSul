<?php
if(!$mail) {

    } else {
	    foreach($mail as $data) {
	        if ($items > 0) {
?>
    <?php
        $pilotavatar = PilotData::GetPilotAvatar($user->pilotid);
        $user = PilotData::GetPilotData($data->who_from);
    ?>
    <li>
    <a href="<?php echo SITE_URL?>/index.php/Mail/item/<?php echo $data->thread_id;?>">
        <div class="pull-left">
            <?php $pilotavatar = PilotData::GetPilotAvatar($user->pilotid); ?>
            <img class="img-circle" src="<?php echo $pilotavatar ?>" alt="user"/>

            <?php
                $shown = array();
                if(in_array($user->pilotid, $shown))
                continue;

                else

                $shown[] = $user->pilotid;
                echo '<span class="profile-status online pull-right"></span>';
            ?>
        </div>
            <h4><?php echo $user->firstname.' '.$user->lastname;?> <small> <i class="fa fa-clock-o"></i><?php echo date('h:i', strtotime($data->date)); ?></small></h4>
            <p><?php echo $data->message; ?></p>
    </a>
  </li>
<?php } else { ?>
    <?php
        $pilotavatar = PilotData::GetPilotAvatar($user->pilotid);
        $user = PilotData::GetPilotData($data->who_from);
    ?>
    <li>
    <a href="<?php echo SITE_URL?>/index.php/Mail/item/<?php echo $data->thread_id;?>">
        <div class="pull-left">
            <?php $pilotavatar = PilotData::GetPilotAvatar($user->pilotid); ?>
            <img class="img-circle" src="<?php echo $pilotavatar ?>" alt="user"/>

            <?php
                $shown = array();
                if(in_array($user->pilotid, $shown))
                continue;

                else

                $shown[] = $user->pilotid;
                echo '<span class="profile-status online pull-right"></span>';
            ?>
        </div>
            <h4><?php echo $user->firstname.' '.$user->lastname;?> <small><i class="fa fa-clock-o"></i><?php echo date('h:i', strtotime($data->date)); ?></small></h4>
            <p><?php echo $data->message; ?></p>
    </a>
  </li>
<?php } } } ?>
