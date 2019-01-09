<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/nortesul/images/img_bg_3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Pilot Roster</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Members</li>
  <li class="active"><b>Pilot Roster</b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
<div class="container" id="tourpackages-carousel">
              <?php
	          if(!$allpilots) {
		        echo 'No Pilots!';
		        return;
	          }
			  ?>
      <table id="tabledlist" class="table table-striped">
            <thead>
              <tr>
	           <th class="quadro roxo" width="16%">Pilot ID</th>
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
              <td><img src="<?php echo Countries::getCountryImage($pilot->location);?>" alt="<?php echo Countries::getCountryName($pilot->location);?>" /></td>
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
               {echo '<img src="'.SITE_URL.'/lib/skins/nortesul/images/farol.png" alt="Inativo" />';}
               else
               {echo '<img src="'.SITE_URL.'/lib/skins/nortesul/images/farol.gif" alt="Ativo" />';}
           ?></td>
             <?php
              }
              ?>
              </tr>
           </tbody>
           </table>
      <!-- End container -->
    </div>
