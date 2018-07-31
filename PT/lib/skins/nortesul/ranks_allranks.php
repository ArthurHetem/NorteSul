   <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_3.png)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Plano de Carreira</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Membros</li>
  <li class="active"><b>Plano de Carreira</b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
<div class="container" id="tourpackages-carousel">

      <div class="row ooo">
        <div class="profile">
			            <?php 
		if(!$ranks)
		{
			echo '<div class="col-lg-12"><div class="alert alert-info"><h4>Nenhum Download</h4><p>Nenhum download foi adicionado.</p></div></div>';
		} else {
			foreach($ranks as $rank) {
        ?>
		<div class="col-xs-12 col-sm-6 col-md-3">
            <div class="thumbnail animate-box">
			<h4 class="text-center">
                  <?php echo $rank->rank; ?>
                </h4>
              <img src="<?php echo $rank->rankimage; ?>" alt="">
              <div class="caption">
                <hr>
                 <div class="team-social-link"> Tripulantes Nessa Patente:<b>
                 <?php 
{
echo $rank->totalpilots; // This contains the total #
}?>
</b>
                </div>
              </div>
            </div>
          </div>
        <?php
            }
		}
        ?>
		</div>
		</div>
		</div>