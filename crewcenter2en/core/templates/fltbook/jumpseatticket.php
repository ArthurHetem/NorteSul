<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Confirm Jumpseat</h3>
            </div>
			<div class="box-body">
<div id="contenttext">
  <form action="<?php echo url('/Fltbook/jumpseatPurchase');?>" method="post">
   <table class="balancesheet" align="center">
      <tr>
          <td colspan="1">Confirm Jumpseat</td>
      </tr>
      <tr>
          <td>Destino: <strong><?php echo $airport->name; ?></strong></td>
      </tr>
      <tr>
          <td>Data de Partida: <strong><?php echo date('d/m/Y') ?></strong></td>
      </tr>
      <tr>
          <td>Custo total: <strong>$<?php echo $cost; ?></strong></td>
      </tr>
    </table>
      <br />
      <div style="text-align: center;">
        <a href="<?php echo url('/Fltbook');?>"><input type="button" class="btn btn-success sharp" value="Cancel Jumpseat"></a>
  	    <input type="submit" value="Confirm Jumpseat">
      </div>
      <input type="hidden" name="arricao" value="<?php echo $airport->icao; ?>" />
  </form>
</div>
</div>
</div>
</div>
</div>
</section>
