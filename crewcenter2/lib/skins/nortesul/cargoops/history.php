<div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
      <div class="box-header with-border">
      <h3 class="box-title"><strong>My</strong> cargo flights</h3>
      <div class="pull-right box-tools">
          <span class="label label-info">Flights: <?php echo $contractcount; ?></span>
      </div>
      </div>
      <div class="box-body">
        <table class="table">
          <tr>
          <th>Flight</th>
          <th>From</th>
          <th>To</th>
          <th>Aircraft</th>
          <th>Time</th>
          <th>Landingrate</th>
          <th>Date</th>
          </tr>
          <?php
          if(!$pireps)
          {
          ?>
          <tr><td colspan="7">No Cargo Flights found!</td></tr>
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
