<div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
      <div class="box-header with-border">
      <h3 class="box-title"><strong>Meus</strong> voos de carga</h3>
      </div>
      <div class="box-body">
        <table class="table">
          <tr>
          <th>Voo#</th>
          <th>Decolagem</th>
          <th>Pouso</th>
          <th>Aeronave</th>
          <th>Duração</th>
          <th>Landing Rate</th>
          <th>Data</th>
          </tr>
          <?php
          if(!$pireps)
          {
          ?>
          <tr><td colspan="7">Nenhum voo de carga encontrado!</td></tr>
          <?php
          }
          else
          {
          foreach($pireps as $pirep)
          {
          ?>
          <tr>
          <td><?php echo $pirep->code; ?><?php echo $pirep->flightnum; ?></td>
          <td><?php echo $pirep->depicao; ?></td>
          <td><?php echo $pirep->arricao; ?></td>
          <td><?php echo $pirep->name; ?> (<?php echo $pirep->registration; ?>)</td>
          <td><?php echo $pirep->flighttime; ?></td>
          <td><?php echo $pirep->landingrate; ?></td>
          <td><?php echo $pirep->submitdate; ?></td>
          </tr>
          <?php
          }
          }
          ?>
          </table>
      </div>
    </div>
    </div>
</div>


<!-- End container -->
</section>
