<div class="site-blocks-cover overlay"
    style="background-image: url(<?php echo SITE_URL;?>/lib/skins/nortesul/images/canvas/1.jpg);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="sub-text">Home > Members > <strong>Rank Structure</strong></span>
                <h1><strong>Rank Structure</strong></h1>
            </div>
        </div>
    </div>
</div>
<div class="site-section">
    <div class="container">
        <div class="row">
                            <?php 
		if(!$ranks)
		{
		} else {
			foreach($ranks as $rank) {
        ?>
                            <div class="col-lg-3 col-md-3 mb-5 offset-md-1 post-entry profile">
                        <h4 class="text-center">
                            <?php echo $rank->rank; ?>
                        </h4>
                            <img src="<?php echo $rank->rankimage; ?>" class="mx-auto d-block" alt="">
                        <hr>
                        <h3><span class="d-block mb-1 text-center">Pilots in this rank: <strong><?php 
{
echo $rank->totalpilots; // This contains the total #
}?></strong></span></h3>
                    </div>
                            <?php
            }
		}
        ?>
        </div>
    </div>
</div>