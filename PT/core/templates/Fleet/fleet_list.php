    <div class="container" id="tourpackages-carousel">
       <table id="tabledlist" class="table table-striped">
	       <thead>
		    <tr>
		     <th class="quadro roxo">Prefixo da Aeronave</th>
	         <th class="quadro roxo">Tipo da Aeronave</th>
		     <th class="quadro roxo">Alcance</th>
		     <th class="quadro roxo">Detalhes</th>
		    </tr>
	       </thead>
	       <tbody>
	        
	       </tbody>
          </table>
      <!-- End container -->
    </div>
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <div class="laranja-accordion"><span class="hue1">Airbus A319</span></div>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
         <table id="tabledlist" class="table table-striped">
	       <thead>
		    <tr>
		     <th class="quadro roxo">Prefixo da Aeronave</th>
	         <th class="quadro roxo">Tipo da Aeronave</th>
		     <th class="quadro roxo">Alcance</th>
		     <th class="quadro roxo">Detalhes</th>
		    </tr>
	       </thead>
	       <tbody>
	        <?php foreach($aircrafts as $aircrafts){ ?>
			<?php if($aircrafts->icao == "A319"){?>
		    <tr>
		     <td><?php echo $aircrafts->registration; ?></td>
		     <td><?php echo $aircrafts->fullname; ?></td>
		     <td><?php echo $aircrafts->range; ?></td>
		     <td><a href="<?php echo url('fleet/view/' . $aircrafts->id); ?>"><button class="btn btn-default">Ver&raquo;</button></a></td> 
		    </tr>
	        <?php  }}?>
	       </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <div class="laranja-accordion"><span class="hue1">Airbus A320</span></div>
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
       <table id="tabledlist" class="table table-striped">
	       <thead>
		    <tr>
		     <th class="quadro roxo">Prefixo da Aeronave</th>
	         <th class="quadro roxo">Tipo da Aeronave</th>
		     <th class="quadro roxo">Alcance</th>
		     <th class="quadro roxo">Detalhes</th>
		    </tr>
	       </thead>
	       <tbody>
	        <?php foreach($aircrafts2 as $aircrafts){ ?>
			<?php if($aircrafts->icao == "A320"){?>
		    <tr>
		     <td><?php echo $aircrafts->registration; ?></td>
		     <td><?php echo $aircrafts->fullname; ?></td>
		     <td><?php echo $aircrafts->range; ?></td>
		     <td><a href="<?php echo url('fleet/view/' . $aircrafts->id); ?>"><button class="btn btn-default">Ver&raquo;</button></a></td> 
		    </tr>
	        <?php  }}?>
	       </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <div class="laranja-accordion"><span class="hue1">Airbus A330</span></div>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <table id="tabledlist" class="table table-striped">
	       <thead>
		    <tr>
		     <th class="quadro roxo">Prefixo da Aeronave</th>
	         <th class="quadro roxo">Tipo da Aeronave</th>
		     <th class="quadro roxo">Alcance</th>
		     <th class="quadro roxo">Detalhes</th>
		    </tr>
	       </thead>
	       <tbody>
	        <?php foreach($aircrafts3 as $aircrafts){ ?>
			<?php if($aircrafts->icao == "A330"){?>
		    <tr>
		     <td><?php echo $aircrafts->registration; ?></td>
		     <td><?php echo $aircrafts->fullname; ?></td>
		     <td><?php echo $aircrafts->range; ?></td>
		     <td><a href="<?php echo url('fleet/view/' . $aircrafts->id); ?>"><button class="btn btn-default">Ver&raquo;</button></a></td> 
		    </tr>
	        <?php  }}?>
	       </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <div class="laranja-accordion"><span class="hue1">Airbus A350</span></div>
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <table id="tabledlist" class="table table-striped">
	       <thead>
		    <tr>
		     <th class="quadro roxo">Prefixo da Aeronave</th>
	         <th class="quadro roxo">Tipo da Aeronave</th>
		     <th class="quadro roxo">Alcance</th>
		     <th class="quadro roxo">Detalhes</th>
		    </tr>
	       </thead>
	       <tbody>
	        <?php foreach($aircrafts4 as $aircrafts){ ?>
			<?php if($aircrafts->icao == "A350"){?>
		    <tr>
		     <td><?php echo $aircrafts->registration; ?></td>
		     <td><?php echo $aircrafts->fullname; ?></td>
		     <td><?php echo $aircrafts->range; ?></td>
		     <td><a href="<?php echo url('fleet/view/' . $aircrafts->id); ?>"><button class="btn btn-default">Ver&raquo;</button></a></td> 
		    </tr>
	        <?php  }}?>
	       </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <div class="laranja-accordion"><span class="hue1">Boeing 737-800NG</span></div>
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <table id="tabledlist" class="table table-striped">
	       <thead>
		    <tr>
		     <th class="quadro roxo">Prefixo da Aeronave</th>
	         <th class="quadro roxo">Tipo da Aeronave</th>
		     <th class="quadro roxo">Alcance</th>
		     <th class="quadro roxo">Detalhes</th>
		    </tr>
	       </thead>
	       <tbody>
	        <?php foreach($aircrafts3 as $aircrafts){ ?>
			<?php if($aircrafts->icao == "B737"){?>
		    <tr>
		     <td><?php echo $aircrafts->registration; ?></td>
		     <td><?php echo $aircrafts->fullname; ?></td>
		     <td><?php echo $aircrafts->range; ?></td>
		     <td><a href="<?php echo url('fleet/view/' . $aircrafts->id); ?>"><button class="btn btn-default">Ver&raquo;</button></a></td> 
		    </tr>
	        <?php  }}?>
	       </tbody>
          </table>
      </div>
    </div>
  </div>
</div>    