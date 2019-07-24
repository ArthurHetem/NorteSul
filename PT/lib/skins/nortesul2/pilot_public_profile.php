<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1><?php echo $pilot->firstname . ' ' . $pilot->lastname?></h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Membros</li>
  <li class="active"><b><?php echo $pilot->firstname . ' ' . $pilot->lastname?></b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
<div class="container" id="tourpackages-carousel">
<?php
if(!$pilot) {
	echo '<h3>This pilot does not exist!</h3>';
	return;
}
?>
<table class="table table-bordered table-hover ooo">
	<tr>
		<td align="center" valign="top">
			<?php
			if(!file_exists(SITE_ROOT.AVATAR_PATH.'/'.$pilotcode.'.png')) {
				echo 'Sem Avatar!';
			} else {
				echo '<img src="'.SITE_URL.AVATAR_PATH.'/'.$pilotcode.'.png'.'" alt="Sem Avatar!" /> ';
			}
			?>
			<br /><br />
			<img src="<?php echo $pilot->rankimage?>"  alt="" />
		</td>
		<td valign="top">
			<ul>
				<li><strong>ID do piloto: </strong><?php echo $pilotcode ?></li>
				<li><strong>Rank: </strong><?php echo $pilot->rank;?></li>
				<li><strong>Total de Voos: </strong><?php echo $pilot->totalflights?></li>
				<li><strong>Total de Horas: </strong><?php echo Util::AddTime($pilot->totalhours, $pilot->transferhours); ?></li>
				<li><strong>País: </strong>
					<img src="<?php echo Countries::getCountryImage($pilot->location);?>"
								alt="<?php echo Countries::getCountryName($pilot->location);?>" />
					<?php echo Countries::getCountryName($pilot->location);?>
				</li>

				<?php
				// Show the public fields
				if($allfields) {
					foreach($allfields as $field) {
						echo "<li><strong>$field->title: </strong>$field->value</li>";
					}
				}
				?>
			</ul>

			<p>
			<strong>Awards</strong>
			<?php
			if(is_array($allawards)) {
			?>
			<ul>
				<?php
                foreach($allawards as $award) {
					/* To show the image:

						<img src="<?php echo $award->image?>" alt="<?php echo $award->descrip?>" />
					*/
				?>
					<li><?php echo $award->name ?></li>
				<?php } ?>
			</ul>
			<?php
			}
			?>
		</p>
		</td>

	</tr>
</table>

<!-- Google Chart Implementation - OFC Replacement - simpilot -->
<img src="<?php echo $chart_url  ?>" alt="Pirep Chart" />
