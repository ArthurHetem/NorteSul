<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Confirmar Jumpseat</h3>
            </div>
			<div class="box-body">
<div id="contenttext">
  <form action="<?php echo url('/Fltbook/jumpseatPurchase');?>" method="post">
   <table class="table table-bordered" align="center">
      <tr>
          <td colspan="1">Confirmação de Jumpseat</td>
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
        <a href="<?php echo url('/schedules');?>"><input type="button" class="btn btn-default sharp" value="Cancelar Jumpseat"></a>
  	    <input type="submit" class="btn btn-success sharp" value="Confirmar Jumpseat">
      </div>
      <input type="hidden" name="arricao" value="<?php echo $airport->icao; ?>" />
  </form>
</div>
</div>
</div>
</div>
</div>
</section>
