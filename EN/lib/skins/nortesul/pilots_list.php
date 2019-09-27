<div class="site-blocks-cover overlay"
    style="background-image: url(<?php echo SITE_URL;?>/lib/skins/nortesul/images/canvas/1.jpg);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="sub-text">Home > Members > <strong>Pilot Roster</strong></span>
                <h1><strong>Pilot Roster</strong></h1>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
      <table id="tabledlist" class="table table-striped ooo table-hover">
            <thead>
              <tr>
	           <th class="quadro roxo" width="16%">Callsign</th>
	           <th class="quadro roxo" width="20%">Name</th>
	           <th class="quadro roxo" width="10%">Country</th>
			   <th class="quadro roxo" width="16%">Rank</th>
			   <th class="quadro roxo" width="16%">Flights</th>
	           <th class="quadro roxo" width="16%">Hours</th>
			   <th class="quadro roxo" width="16%">HUB</th>
			   <th class="quadro roxo" width="10%">Status</th>
              </tr>
            </thead>
            <tbody>
              <?php 
               foreach($allpilots as $pilot){
             ?>  
              <tr>
	          <td><b><a href="<?php echo url('/profile/view/'.$pilot->pilotid);?>"><?php echo PilotData::GetPilotCode($pilot->code, $pilot->pilotid)?></a></b></td>
	          <td><?php echo $pilot->firstname.' <b>'.$pilot->lastname?></b></td>
              <td><span class="flag-icon flag-icon-<?php echo strtolower($pilot->location);?>"></td>
			  <td><?php
               if($pilot->rank == 'New Hire')
               {echo '<img src="'.SITE_URL.'/lib/skins/nortesul/images/new hire.png" alt="Novato" width="80px" height="30px"/>';}
               else
               {echo '<img src="'.$pilot->rankimage.'" alt="'.$pilot->rank.'" width="80px" height="30px"/>';}
           ?></td>
			  <td><?php echo $pilot->totalflights; ?></td>
              <td><?php echo Util::AddTime($pilot->totalhours, $pilot->transferhours); ?></td>
			  <td><b><?php echo $pilot->hub?></b></td>
			  <td><?php
               if($pilot->retired == '1')
               {echo '<img src="'.SITE_URL.'/lib/skins/nortesul/images/farol.png" alt="On leave" />';}
               else
               {echo '<img src="'.SITE_URL.'/lib/skins/nortesul/images/farol.gif" alt="Active" />';}
           ?></td>
             <?php
              }
              ?>
              </tr>
           </tbody>
           </table>
            </div>
        </div>
    </div>
</div>