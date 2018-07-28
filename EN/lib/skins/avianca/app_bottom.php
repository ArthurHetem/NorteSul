<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About US</h3>
						<p>NorteSul is a virtual organization created by aviation enthusiasts that simulate with profissionalism, quality and precision as we operate  NorteSul Linhas Aéreas on IVAO and VATSIM Networks.</p>

<p>We support Microsoft Flight Simulator, XPlane or Prepar3D and <b>we are a Non-Profit Organization</b>.</p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Latest News</h3>
						<ul class="gtco-footer-links">
                              0 Files Found!
						</ul>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Live Flights</h3>
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
                                        No Pilots Flying now.
                                 <?php
                 }
                 ?>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-md-push-1">
					<div class="gtco-widget">
						<h3>Contacts</h3>
						<ul class="gtco-quick-contact">
						Contact Us and a Staff will answer your questions.
							<li><i class="far fa-envelope"></i><a href="mailto:staff@nortesulvirtual.com">staff@nortesulvirtual.com</a></li>
							<li><a href="https://www.facebook.com/nortesulvirtual/" class="fab fa-facebook"></a> <a href="https://www.instagram.com/nortesulvirtual/" class="fab fa-instagram"></a></li>
						</ul>
					</div>
				</div>

			</div>

			<div class="row copyright">
				<div class="col-md-12">
					<p align="center">
						<small class="block">&copy; 2017 - <?php echo date("Y")?>  NorteSul Virtual. All rights reserved.</small> 
						<small class="block">Designed by Arthur Hetem</small>
					</p>
				</div>
			</div>

		</div>
	</footer>
	<!-- </div> -->
