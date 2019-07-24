<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<section class="content-header bg-black" style="background-image: url('<?php echo SITE_URL;?>/lib/skins/nortesul/img/fundopiloto.jpg'); height: 200px;">
    <div class="pull-right"><div class="widget-icon cinza2" style=" margin-right: 50px; border: solid 2px white;">
      <?php
      if(!file_exists(SITE_ROOT.AVATAR_PATH.'/'.$pilotcode.'.png')) {
        echo '<img src="https://nortesulvirtual.com/beta/lib/images/noavatar.png'.'" alt="No Avatar" class="img-circle" width="50px"/>';
      } else {
        echo '<img src="'.SITE_URL.AVATAR_PATH.'/'.$pilotcode.'.png'.'" alt="No Avatar" class="img-circle" width="50px" /> ';
      }
      ?>
          </div></div>
    <h1><strong><?php echo $pilot->firstname . ' ' . $pilot->lastname?></strong></h1>
    <h4><?php echo $pilotcode ?> | <?php echo $pilot->rank;?></h4>
        <br>
</section>
<section class="content container-fluid">
  <div class="row">
    <div class="col-md-4">
      <div class="box box-widget widget-user">
      <!-- Add the bg color to the header using any of the bg-* classes -->
      <div class="widget-user-header bg-black">
        <h3 class="widget-user-username"><strong>Caixa</strong> de Contato</h3>
        <h4 class="widget-user-desc"><span class="label label-success">Piloto Verificado <i class="fa fa-check"></i></span></h4>
        <div class="widget-icon cinza2" style="margin-top: 30px; border: solid 2px white;">
                  <i class="fa fa-comments img-circle" style="border: none;"></i>
              </div>
      </div>
      <div class="box-footer">
          <?php if(Auth::$userinfo->pilotcode == $pilotcode){

          }else{?>
          <a href="#" class="levanta btn-block btn-lg">
            <div class="widget-icon cinza2" style="border: solid 2px white; color:white; margin-left:0px;">
                      <i class="fa fa-envelope img-circle" style="border: none;"></i>
                  </div><span class="btn btn-lg text-center" style="text-decoration: none; color:#888888;">Enviar iMail</span></a>
        <?php }?>
        <div class="text-center text-muted">
        ~ Membro desde ~<br>
        <?php echo date(DATE_FORMAT, strtotime($pilot->joidate));?>
      </div>
      </div>
    </div>
    </div>
    <div class="col-md-8">
      <div class="box box-solid">
          <div class="box-header with-border">
              <h3 class="box-title"><strong>Detalhes</strong> do Piloto</h3>
          </div>
          <div class="box-body">
            <table class="table table-striped">
              <tr>
                <td align="center"><p>Rank na Companhia: <?php echo $pilot->rank;?></p></td>
              </tr>
              <tr>
                <td align="center"><p>Aeroporto Base: <?php echo $pilot->hub;?></p></td>
              </tr>
              <tr>
                <td align="center"><p>IVAO ID: <?php
                $ivaoId = PilotData::GetFieldValue($pilot->pilotid, 'IVAO VID');
                    if($ivaoId < 1){
                        echo "<span class='text-muted'>Não Linkado</span>";
                    } else {
                        echo "<span class='text-gren'>".$ivaoId."</span>";
                    }?></p></td>
              </tr>
              <tr>
                <td align="center"><p>VATSIM ID: <?php
                $vatsimId = PilotData::GetFieldValue($pilot->pilotid, 'VATSIM ID');
                    if($vatsimId < 1){
                        echo "<span class='text-muted'>Não Linkado</span>";
                    } else {
                        echo "<span class='text-gren'>".$vatsimId."</span>";
                    }?></p></td>
              </tr>
              <tr>
                <td align="center"><p>Origem do Piloto: <img src="<?php echo Countries::getCountryImage($pilot->location);?>"/> (<?php echo $pilot->location;?>)</p></td>
              </tr>
              <tr>
                <td align="center"><p>Pagamento Total: <?php echo $pilot->totalpay;?></p></td>
              </tr>
              <tr>
                <td align="center"><p>Status: <?php if ($pilot->retired = 3){
									echo '<span class="label label-success"><i class="fa fa-check"></i> Ativo</span>';
								} else{
									echo '<span class="label label-warning"><i class="fa fa-exclamation-triangle"></i> Indisponível</span>';
								}
								?></p></td>
              </tr>
              <?php var_dump($pilot);?>
            </table>
          </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title"><strong>Informações</strong> Adicionais</h3>
        </div>
        <div class="box-body">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#tab_1" data-toggle="tab"><?php $contaMedalha = count($allawards); echo '<span class="label label-primary">' .$contaMedalha.'</span> Awards Recebidas';?> </a></li>
              <li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="tab_1">
                <b>How to use:</b>

                <p>Exactly like the original bootstrap tabs except you should use
                  the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                A wonderful serenity has taken possession of my entire soul,
                like these sweet mornings of spring which I enjoy with my whole heart.
                I am alone, and feel the charm of existence in this spot,
                which was created for the bliss of souls like mine. I am so happy,
                my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                that I neglect my talents. I should be incapable of drawing a single stroke
                at the present moment; and yet I feel that I never was a greater artist than now.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_2">
                The European languages are members of the same family. Their separate existence is a myth.
                For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                in their grammar, their pronunciation and their most common words. Everyone realizes why a
                new common language would be desirable: one could refuse to pay expensive translators. To
                achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                words. If several languages coalesce, the grammar of the resulting language is more simple
                and regular than that of the individual languages.
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="tab_3">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                It has survived not only five centuries, but also the leap into electronic typesetting,
                remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                like Aldus PageMaker including versions of Lorem Ipsum.
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
        </div>
    </div>
  </div>
</div>
<table>
	<tr>
		<td align="center" valign="top">
			<?php
			if(!file_exists(SITE_ROOT.AVATAR_PATH.'/'.$pilotcode.'.png')) {
				echo 'No avatar';
			} else {
				echo '<img src="'.SITE_URL.AVATAR_PATH.'/'.$pilotcode.'.png'.'" alt="No Avatar" /> ';
			}
			?>
			<br /><br />
			<img src="<?php echo $pilot->rankimage?>"  alt="" />
		</td>
		<td valign="top">
			<ul>
				<li><strong>Pilot ID: </strong><?php echo $pilotcode ?></li>
				<li><strong>Rank: </strong><?php echo $pilot->rank;?></li>
				<li><strong>Total Flights: </strong><?php echo $pilot->totalflights?></li>
				<li><strong>Total Hours: </strong><?php echo Util::AddTime($pilot->totalhours, $pilot->transferhours); ?></li>
				<li><strong>Location: </strong>
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
</section>
