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

  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <div class="laranja-accordion"><span class="hue1">Boeing 777F</span></div>
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
          <div class="laranja-accordion"><span class="hue1">Boeing 747-8F</span></div>
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