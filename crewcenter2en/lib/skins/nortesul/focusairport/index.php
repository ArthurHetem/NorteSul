  <?php
    // Set the Focus Airport here :
    $icao = 'SBGL';
    // Set the Image URL here :
    $url = SITE_URL.'/lib/skins/nortesul/focusairport/gig.jpg';
  ?>

      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

      <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <!--You can edit it below this-->
            <img src="<?php echo $url; ?>" />
          <div class="carousel-caption">
            <h3>#FOCUSAIRPORT</h3>
            <p>The Focus Airport of this week is <strong><?php echo $icao ?></strong></p>
          </div>
          </div>
        </div>
      </div>
