   <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_3.png)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
<<<<<<< HEAD
							<h1>Career Plan</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Members</li>
  <li class="active"><b>Career Plan</b></li>
=======
							<h1>Career</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Pilot Roster</li>
  <li class="active"><b>Career</b></li>
>>>>>>> 7bc52fd6ddc0a718ad64228335df3c2bd730f22f
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
<div class="container" id="tourpackages-carousel">

      <div class="row">
        <div class="profile">
			            <?php 
		if(!$ranks)
		{
			echo '<div class="col-lg-12"><div class="alert alert-info"><h4>0 Download</h4><p>0 download was added.</p></div></div>';
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
<<<<<<< HEAD
                 <div class="team-social-link"> Pilots in this Rank:<b>
=======
                 <div class="team-social-link"> Total Crew in this Rank:<b>
>>>>>>> 7bc52fd6ddc0a718ad64228335df3c2bd730f22f
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
