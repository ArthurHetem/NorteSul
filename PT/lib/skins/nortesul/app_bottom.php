<footer class="ftco-footer ftco-bg-dark ftco-section" style="background-image: url(<?php echo SITE_URL;?>/lib/skins/nortesul/images/footer/F<?php echo rand(1,3);?>.jpg);" data-img-width="1600" data-img-height="1067">
      <div class="container">
        <div class="row mb-5 d-flex">
          <div class="col-md">
            <div class="ftco-footer-widget mb-3">
              <h2 class="ftco-heading-2">Quem Somos</h2>
              <p>A NorteSul é uma organização virtual movida por entusiastas da aviação que busca simular com seriedade, qualidade e precisão as operações de uma Companhia Aérea nas principais redes de voo online.</p>
			  <p>Utilizamos como plataforma de voo o Microsoft Flight Simulator, XPlane ou Prepar3D e <strong>NÃO POSSUÍMOS FINS LUCRATIVOS.</strong></p>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-3 ml-md-4">
              <h2 class="ftco-heading-2">Últimas Notícias</h2>
              <ul class="list-unstyled">
              <?php $allnews = new PopUpNews(); $allnews->PopUpNewsList(5); ?>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-3">
            	<h2 class="ftco-heading-2">Contato</h2>
            	<i class="fa fa-envelope"></i> <a href="mailto:support@nortesulvirtual.com">support@nortesulvirtual.com</a>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="https://www.facebook.com/nortesulvirtual"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://twitter.com/nortesulvirtual"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/nsv_virtual/?hl=pt-br"><span class="icon-instagram"></span></a></li>
                <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCxeniklwjQp2FbNFwB5jlpw"><span class="icon-youtube"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
                <p>&copy; 2018 - <?php echo date("Y");?> NorteSul. Todos os direitos reservados. </p>
          </div>
        </div>
      </div>
    </footer>