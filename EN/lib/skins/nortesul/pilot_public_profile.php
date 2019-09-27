<div class="site-blocks-cover overlay"
    style="background-image: url(<?php echo SITE_URL;?>/lib/skins/nortesul/images/canvas/4.jpg);" data-aos="fade"
    data-stellar-background-ratio="0.5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-10">
                <span class="sub-text">Home > Membros > Nosso Time > <strong>Piloto
                        #<?php echo $pilot->pilotid;?></strong></span>
                <h1>Perfil - <strong><?php echo $pilotcode;?></strong></h1>
            </div>
        </div>
    </div>
</div>
<?php
$voos = $pilot->totalflights;
if ($voos >0){
$somar = "SELECT SUM(landingrate) as accepted FROM `phpvms_pireps` WHERE pilotid=$pilot->pilotid";
						 $total = DB::get_row($somar);
						 $v_total = $total->accepted;
						 $linha = "SELECT * FROM `phpvms_pireps` WHERE pilotid=$pilot->pilotid";
						 $taxa = DB::get_results($linha);
						 $v_taxa = $v_total/ count($taxa) ;
}
else
{
$v_taxa = "0";
}
?>
<div class="site-section">
    <div class="container">
        <div class="hr-middle">
            <img src="<?php echo $pilot->rankimage?>" alt="" />
        </div>
        <div class="row">
            <div class="col-md-6">
                <h1><?php echo $pilot->firstname . ' <b>' . $pilot->lastname?></b></h1>
                <h3>Piloto Ativo</h3>
                <h5>
                    <ul>
                        <li>Patente: <strong><?php echo $pilot->rank;?></strong></li>
                        <li>Matrícula: <strong><?php echo $pilotcode;?></strong></li>
                        <li>Horas:
                            <strong><?php echo Util::AddTime($pilot->totalhours, $pilot->transferhours); ?></strong>
                        </li>
                        <li>Voos Realizados: <strong><?php echo $pilot->totalflights?></strong></li>
                        <li>Média de Touchdown: <strong><?php echo  round($v_taxa);?></strong></li>
                        <li>HUB: <strong><?php echo $pilot->hub;?></strong></li>
                        <li>Contratado: <strong><?php echo date("d/m/Y", strtotime($pilot->joindate));?></strong></li>
                        <li>Status: <strong><?php if ($pilot->retired = 3){
									echo '<span class="text-green">Ativo</span>';
								} else{
									echo '<span class="text-red">Inativo</span>';
								}
								?></strong></li>
                        <li>Rede de Voo:
                            <strong><?php $ivao = PilotData::GetFieldValue($pilot->pilotid, 'IVAO VID'); $vatsim =  PilotData::GetFieldValue($pilot->pilotid, 'VATSIM ID'); if (($ivao > 1) && ($vatsim < 1)){ echo "IVAO";} else if (($ivao < 1) && ($vatsim > 1)){ echo "VATSIM";} else if (($ivao > 1) && ($vatsim > 1)){ echo "IVAO/VATSIM";}?> <?php
$fieldvalue = PilotData::GetFieldValue($pilot->pilotid, 'IVAO VID');
if($fieldvalue != '')
{ 
  echo '<br>';
  echo '<a href="http://www.ivao.aero/members/person/details.asp?ID='.$fieldvalue.'" target="_blank"><center><center><img src="http://status.ivao.aero/'.$fieldvalue.'.png" alt="IVAO ID" /></center></a>';
  echo '<br>';
}
?>
                                </td>
                                <td><?php
$fieldvalue = PilotData::GetFieldValue($pilot->pilotid, 'VATSIM ID');
if($fieldvalue != '')
{
  echo '<a href="http://www.vataware.com/pilot.cfm?cid='.$fieldvalue.'" target="_blank"><center><center><img src="https://indicators.vatsim.net/indicator/generate/'.$fieldvalue.'/0/0.png" border="0"/></center></a>';
}
else
{
echo '<center><img src="https://indicators.vatsim.net/indicator/generate/'.$fieldvalue.'/0/0.png" border="0"/></center></a>';
}
?>
                            </strong></li>
                    </ul>
                </h5>
            </div>
            <div class="col-md-6">
                <img src="<?php echo SITE_URL;?>/lib/signatures/NCV<?php echo $pilot->pilotid;?>.jpg"
                    class="img-fluid mx-auto d-block" alt="">
            </div>
        </div>
        <hr>
        <br>
        <div class="row">
            <h2 class="mx-auto d-flex"><a href="" onclick="window.history.go(-1); return false;" class="btn btn-nsv2"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Nossos Membros</a></h2>
        </div>
        <div class="row pt-10 mt-5">
            <div class="col-md-12">
                <section id="tabs" class="project-tab">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab"
                                        href="#nav-home" role="tab" aria-controls="nav-home"
                                        aria-selected="true"><?php if (!$allawards){ echo "0 Award recebida";} else{ echo ''.count($allawards) .' Awards recebidas';}?></a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Todos os Voos</a>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <?php
                foreach($allawards as $award) {				?>
                                    <img src="<?php echo $award->image?>" alt="<?php echo $award->descrip?>" />
                                    <?php } ?>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <?php Template::Show(pireps_viewall);?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>