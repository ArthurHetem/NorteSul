<footer class="site-footer border-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Quem Somos</h3>
              </div>
              <p>A NorteSul é uma organização virtual movida por entusiastas da aviação que busca simular com seriedade, qualidade e precisão as operações de uma Companhia Aérea nas principais redes de voo online.</p>
			  <p>Utilizamos como plataforma de voo o Microsoft Flight Simulator, XPlane ou Prepar3D e <strong>NÃO POSSUÍMOS FINS LUCRATIVOS.</strong></p>
            </div>


          </div>
          <div class="col-lg-4">


            <div class="mb-5">
              <h3 class="footer-heading mb-4">Últimas Notícias</h3>
              <div class="block-25">
                <ul class="list-unstyled">
				<?php $allnews = new PopUpNews();
$allnews->PopUpNewsList(5); ?>
                </ul>
              </div>
            </div>

          </div>


          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Contato</h3>
				<p>Entre em contato com a nossa equipe e tire dúvidas.</p>
				<i class="fas fa-envelope"></i> <a href="mailto:support@nortesulvirtual.com">support@nortesulvirtual.com</a>
                <div class="mt20">
                  <a href="https://www.facebook.com/nortesulvirtual" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="https://twitter.com/nortesulvirtual" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="https://www.instagram.com/nsv_virtual/?hl=pt-br" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="https://www.youtube.com/channel/UCxeniklwjQp2FbNFwB5jlpw" class="pl-3 pr-3"><span class="icon-youtube"></span></a>
                </div>
              </div>
            </div>


          </div>

        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            &copy; 2018 - <?php echo date("Y");?> NorteSul Virtual. Todos os Direitos Reservados.
            </p>
          </div>

        </div>
      </div>
    </footer>