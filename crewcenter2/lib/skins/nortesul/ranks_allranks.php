<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-graduation-cap fa-4x text-muted"></i></div>
    <h1>Crew <strong>Ranks</strong></h1>
    <h1><small>Human Resources Department | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>

		<section class="content container-fluid">
		    <div class="row">
		        <div class="col-md-12">
		            <div class="box box-solid">
		                <div class="box-header with-border">
		                    <h3 class="box-title">Pilot <strong>Ranks</strong></h3>
		                </div>
		                <div class="box-body table-responsive">
											<div class="callout callout-info">
                <p>At NorteSul Virtual, promotions may or may not be performed automatically, depending on whether there is proof for it. Hours transferred do not count towards promotions!</p>
              </div>
		                   <table class="table table-hover table-bordered">
												 <thead>
													 <th><h4>Rank Name</h4></th>
													 <th><h4>Minimum Hours</h4></th>
													 <th><h4>Rank Image</h4></th>
													 <th><h4>Salary</h4></th>
													 <th><h4>Total of Pilots</h4></th>
												 </thead>
												 <tr>

													 <?php
				 			foreach($ranks as $rank) {
				         ?>
													 <td><?php echo $rank->rank;?></td>
													 <td><?php echo $rank->minhours;?></td>
													 <td><img src="<?php echo $rank->rankimage; ?>" alt=""></td>
													 <td>v$<?php echo $rank->payrate;?>/hr</td>
													 <td><?php echo $rank->totalpilots;?></td>
												 </tr>
												 <?php
														 }
												 ?>
											 </table>
		                </div>
		            </div>
		        </div>
		    </div>
		    <!-- End container -->
		</section>
