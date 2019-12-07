<div class="row">
    <div class="col-md-12">
      <div class="box box-solid">
      <div class="box-header with-border">
      <h3 class="box-title">My <strong>Cargo Flights</strong></h3>
      </div>
      <div class="box-body">
        <table class="table">
          <tr>
          <th>Flight#</th>
          <th>Departure</th>
          <th>Arrival</th>
          <th>Aircraft</th>
          <th>Duration</th>
          <th>Landing Rate</th>
          <th>Date</th>
          </tr>
          <?php
          if(!$pireps)
          {
          ?>
          <tr><td colspan="7"><span class="alert alert-danger">Oops, looks like you haven't flown any freight yet, Don't worry, we'll have something to show once you have flown!</span></td></tr>
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
