<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Nossos Membros</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Membros</li>
  <li class="active"><b>Nossos Membros</b></li>
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
		        echo 'Sem Pilotos!';
		        return;
	          }
			  ?>
      <table id="tabledlist" class="table table-striped ooo">
            <thead>
              <tr>
	           <th class="quadro roxo" width="16%">Mátricula</th>
	           <th class="quadro roxo" width="20%">Nome</th>
	           <th class="quadro roxo" width="10%">País</th>
			   <th class="quadro roxo" width="16%">Patente</th>
			   <th class="quadro roxo" width="16%">Voos</th>
	           <th class="quadro roxo" width="16%">Horas</th>
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