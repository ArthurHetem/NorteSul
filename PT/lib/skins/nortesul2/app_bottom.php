<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Quem Somos</h3>
						<p>A NorteSul é uma organização virtual movida por entusiastas da aviação que busca simular com seriedade, qualidade e precisão as operações de uma Companhia Aérea nas principais redes de voo online.</p>

<p>Utilizamos como plataforma de voo o Microsoft Flight Simulator, XPlane ou Prepar3D e <b>NÃO POSSUÍMOS FINS LUCRATIVOS</b>.</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Últimas Notícias</h3>
						<ul class="gtco-footer-links">
                              Nada Encontrado!
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Voos no Momento</h3>
						<ul class="gtco-footer-links">
							<?php
$results = ACARSData::GetACARSData();
if (count($results) > 0)
{
foreach($results as $flight)
         {
                
                 ?>
                     <?php echo $flight->flightnum;?> - <?php echo $flight->depicao;?>/<?php echo $flight->arricao;?>
                                          - <?php if($flight->phasedetail
!= 'Paused') { echo $flight->phasedetail; }
else { echo "Cruise"; }?>
                                 <?php          
                         }
                 } else { ?>
                                        Nenhum Piloto Voando Atualmente.
                                 <?php
                 }
                 ?>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Contatos</h3>
						<ul class="gtco-quick-contact">
						Entre em contato com a nossa equipe e tire dúvidas.
							<li><i class="far fa-envelope"></i><a href="mailto:support@nortesulvirtual.com">support@nortesulvirtual.com</a></li>
							<li><a href="https://www.facebook.com/nortesulvirtual" class="fab fa-facebook"></a> <a href="https://www.instagram.com/nortesulvirtual/" class="fab fa-instagram"></a> <a href="https://twitter.com/NortesulV" class="fab fa-twitter"></a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p align="center">
						<small class="block">&copy; 2018 - <?php echo date("Y")?>  NorteSul Virtual. Todos os direitos reservados.</small> 
						<small class="block">Designed by Arthur Hetem</small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->