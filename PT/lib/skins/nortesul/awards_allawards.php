  <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Nossas Awards</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Membros</li>
  <li class="active"><b>Nossas Awards</b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
    <div class="container ooo" id="tourpackages-carousel">
       <table id="tabledlist" class="table table-striped">
<thead>
<tr>
	<th class="quadro roxo">Award</th>
    <th class="quadro roxo">Descrição</th>
	<th class="quadro roxo">Imagem</th>
	</tr>
</thead>
<tbody>
<?php
foreach($awards as $aw)
{
?>
<tr id="row<?php echo $aw->awardid;?>">
	<td align="center"><?php echo $aw->name; ?></td>
    <td align="center"><?php echo $aw->descrip; ?></td>

	<td align="center"><img src="<?php echo $aw->image; ?>" /></td>
	
	</tr>
<?php
}
?>
</tbody>
</table>
      <!-- End container -->
    </div>