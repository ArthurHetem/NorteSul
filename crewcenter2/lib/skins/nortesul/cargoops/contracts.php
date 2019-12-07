<?php $contractcount = count($contracts); ?>
<?php if($contractcount == '0')
{
echo '<span class="alert alert-danger">There aren&apos;t any contracts here :(!</span>';
return;
} ?>

<div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
      <div class="box-header with-border">
      <h3 class="box-title"><strong>Available</strong> Flights</h3>
      <div class="pull-right box-tools">
          <span class="label label-info">Contracts: <?php echo $contractcount; ?></span>
      </div>
      </div>
      <div class="box-body">
        <table class="table table-hover">
        <thead>
        <tr>
        <td>ID#</td>
        <td>Flight#</td>
        <td>Departure</td>
        <td>Arrival</td>
        <td width="100px">Aircraft</td>
        <td>Duration</td>
        <td>Cargo</td>
        <td>Weight</td>
        <td>Estimated Profit</td>

        <?php if(Auth::LoggedIn())
        { ?>
        <td>Disponibility</td>
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
        <td valign="top"><a href="<?php echo SITE_URL ?>/index.php/CargoOps/contractdetails/<?php echo $contract->cid; ?>" class="btn btn-success">Details</a></td>
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
