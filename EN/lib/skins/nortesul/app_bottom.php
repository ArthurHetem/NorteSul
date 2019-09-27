<footer class="ftco-footer ftco-bg-dark ftco-section" style="background-image: url(<?php echo SITE_URL;?>/lib/skins/nortesul/images/footer/F<?php echo rand(1,3);?>.jpg);" data-img-width="1600" data-img-height="1067">
      <div class="container">
        <div class="row mb-5 d-flex">
          <div class="col-md">
            <div class="ftco-footer-widget mb-3">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>NorteSul is a virtual organization created by aviation enthusiasts that simulate with professionalism, quality and precision as we operate NorteSul Arlines on the best Virtual Flight Networks.</p>
			  <p>We support Microsoft Flight Simulator X, X-Plane and Prepar3D. <strong>NorteSul Virtual is a Non-Profit Organization.</strong></p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-3 ml-md-4">
              <h2 class="ftco-heading-2">Latest News</h2>
              <ul class="list-unstyled">
              <?php $allnews = new PopUpNews(); $allnews->PopUpNewsList(5); ?>
              </ul>
            </div>
          </div>
          <div class="col-3">
            <div class="ftco-footer-widget mb-3">
            	<h2 class="ftco-heading-2">Contacts</h2>
              <i class="fa fa-envelope mb-3"></i> <a href="mailto:support@nortesulvirtual.com">support@nortesulvirtual.com</a>

                <a href="https://twitter.com/nortesulvirtual" class="p-2 pl-0 btn btn-twitter"><i class="fa fa-twitter"
                        aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/nortesulvirtual/" class="p-2 pl-0 btn btn-facebook"><i
                        class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCxeniklwjQp2FbNFwB5jlpw" class="p-2 pl-0 btn btn-youtube"><i
                        class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/nsv_virtual/" class="p-2 pl-0 btn btn-instagram"><i
                        class="fa fa-instagram" aria-hidden="true"></i></span></a>
              
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
                <p>&copy; 2018 - <?php echo date("Y");?> NorteSul. All rights reserved. </p>
          </div>
        </div>
      </div>
    </footer>