  <?php 
    // Set the Focus Airport here :
    $icao = 'OMDB';
    // Set the Image URL here : 
    $url = SITE_URL.'/lib/skins/avianca/focusairport/dxb.jpg';
  ?>
  
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        
      <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <!--You can edit it below this-->
            <img src="<?php echo $url; ?>" />
          <div class="carousel-caption">
            <h3>#FOCUSAIRPORT</h3> 
            <p>O Focus Airport dessa semana é <strong><?php echo $icao ?></strong></p>
          </div>
          </div>
        </div>
      </div>