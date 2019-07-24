<?php $contractcount = count($contracts); ?>
<?php if($contractcount == '0')
{
echo "Infelizmente não existem contratos disponíveis!";
return;
} ?>

<div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
      <div class="box-header with-border">
      <h3 class="box-title"><strong>Voos de carga</strong> disponíveis</h3>
      <div class="pull-right box-tools">
          <span class="label label-info">N° de Voos: <?php echo $contractcount; ?></span>
      </div>
      </div>
      <div class="box-body">
        <table class="table table-hover">
        <thead>
        <tr>
        <td>ID#</td>
        <td>Voo#</td>
        <td>Decolagem</td>
        <td>Pouso</td>
        <td>Aeronave</td>
        <td>Duração</td>
        <td>Carga</td>
        <td>Peso</td>
        <td>Lucro est.</td>

        <?php if(Auth::LoggedIn())
        { ?>
        <td>Disponibilidade</td>
        <?php } ?>
        </tr>
      </thead>
        <?php foreach($contracts as $contract)
        {
        ?>
        <tr>
        <td valign="top"><?php echo $contract->cid; ?></td>
        <td valign="top"><?php echo $contract->code; echo $contract->flightnum; ?></td>
        <td valign="top"><strong><?php echo ucwords($contract->depicao); ?></strong>
        <br/>
        <?php echo $contract->depname; ?>
        </td>
        <td valign="top"><strong><?php echo ucwords($contract->arricao); ?></strong>
        <br/>
        <?php echo $contract->arrname; ?>
        </td>
        <td valign="top"><?php echo $contract->aircraftname; ?></td>
        <td valign="top"><?php echo $contract->flighttime; ?></td>
        <td valign="top"><?php echo $contract->cargoname; ?></td>
        <td valign="top" class="text-green"><?php echo $contract->cload; ?>lbs / <?php $peso = $contract->cload; echo round($peso/2.205, -1);?>kgs</td>
        <td valign="top">$<?php echo number_format(round($contract->cload * $contract->price)); ?></td>
        <?php if(Auth::LoggedIn() && Auth::$userinfo->ranklevel >= $contract->aircraftlevel)
        { ?>
        <td valign="top"><a href="<?php echo SITE_URL ?>/index.php/CargoOps/contractdetails/<?php echo $contract->cid; ?>" class="btn btn-success">Detalhes</a></td>
      <?php } else{ ?>
        <td valign="top"><a href="<?php echo SITE_URL ?>/index.php/CargoOps/contractdetails/<?php echo $contract->cid; ?>" class="btn btn-danger" data-toggle="tooltip" title="At this moment you can't bid any cargo contracts, try again later" disabled>Details</a></td>
      <?php }?>
        </tr>
      <?php }?>
        </table>
      </div>
    </div>
    </div>
</div>


<!-- End container -->
</section>
