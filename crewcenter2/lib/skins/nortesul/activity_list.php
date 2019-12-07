<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
 
<?php

foreach($allactivities as $activity) {
    
    /*  Use the activity->type to determine the type of activity (duh?)
        Constants are in app.config.php 
        
        Like here, I put a specific link to the PIREP at the end of the message
        You can use the if/else's to add specific images?
        
        $activity->refid is the ID of the thing it's referring to, so if it's a
        new PIREP, the refid will be the ID of the PIREP
        
        $activity-> also contains all the fields about the pilot who this notice
        is about        
     */
           
    $link_title = '';
    $link_href = '';
    if($activity->type == "ACTIVITY_NEW_PIREP") {
        
        $link_href = url('/pireps/view/'.$activity->refid);
        $link_title = 'Ver PIREP';
        
    } elseif($activity->type == "ACTIVITY_PROMOTION") {
        
        $link_href = 'http://twitter.com/#!/'.Config::get('TWITTER_AIRLINE_ACCOUNT').'/status/'.$activity->refid;
        $link_title = '<font color="white">Ver Tweet</font>';
        
    } elseif($activity->type == "ACTIVITY_NEW_PILOT") {
        $link_href = url('/profile/view/'.$activity->pilotid);
        $link_title = '<b>Ver Perfil</b>';
    }
?>

        <li>
              <i class="fa fa-clock-o bg-<?php
        if($activity->type == "ACTIVITY_PROMOTION") {
            echo 'red';
        }else{echo "gray";} 
        ?>"></i>

              <div class="timeline-item">
                <span class="time"><i class="fa fa-clock-o"></i> <?php $inicio = new  DateTime($activity->submitdate); $hoje = new DateTime(); $calcula = $inicio->diff($hoje);if($calcula->d < 1 && $calcula->y == 0){ echo "{$calcula->h} hora(s) atrás";}
									elseif($calcula->d >= 1 && $calcula->m == 0 && $calcula->y == 0){echo "{$calcula->d} dia(s) atrás";}elseif($calcula->m >= 1 && $calcula->y == 0){echo "{$calcula->m} mes(es) atrás";}else {echo "{$calcula->y} ano(s) atrás";}?></span>
                <h3 class="timeline-header"><?php
        /*  Example, if it's a twitter status update (ACTIVITY_TWITTER),
            then show an image (in this case, a small Twitter icon) */
        if($activity->type == "ACTIVITY_PROMOTION") {
            echo 'Ranks bot';
        }
        
        ?>
		<?php
        /*  Example, if it's a twitter status update (ACTIVITY_TWITTER),
            then show an image (in this case, a small Twitter icon) */
        if($activity->type == "ACTIVITY_JUMPSEAT") {
            echo 'Jumpseat monitor bot';
        }
        
        ?>
		<?php
        /*  Example, if it's a twitter status update (ACTIVITY_TWITTER),
            then show an image (in this case, a small Twitter icon) */
        if($activity->type == "ACTIVITY_NEW_PIREP") {
            echo 'Flight Operations bot';
        }
        
        ?>
		<?php
        /*  Example, if it's a twitter status update (ACTIVITY_TWITTER),
            then show an image (in this case, a small Twitter icon) */
        if($activity->type == "ACTIVITY_NEW_PILOT") {
            echo 'Membership monitor bot';
        }
        
        ?></h3>

                <div class="timeline-body">
				<?php
        /*  If there is a pilot associated with this feed update, show their name
            and a link to their profile page */ 
        if($activity->pilotid != 0) { 
            $pilotCode = PilotData::getPilotCode($activity->code, $activity->pilotid);
            ?>
        
            <a href="<?php echo url('/profile/view/'.$activity->pilotid);?>">
            <?php echo $pilotCode.' - '.$activity->firstname.' '.$activity->lastname?>
            </a> 
    
        <?php 
        } /* End if pilot ID != 0 */ 
        ?>
					        <?php 
            /* Show the activity message itself */
            echo stripslashes($activity->message);		
        ?>
                </div>


        
        <?php
        if($link_href != '') {
            echo '<div class="timeline-footer">
                  <a href="'.$link_href.'"" class="btn btn-xs bg-blue">'.$link_title.'</a>
                </div>';
        }
        ?>
                  </div>
            </li>
<?php
}
?>