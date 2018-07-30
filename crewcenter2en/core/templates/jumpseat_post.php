	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
		<small><span class="badge badge-roundless badge-success">Versão Alpha do Despacho Operacional</span></small>
			</h3>
            <hr>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
                   <h2>JumpSeat</h2>
                <div class="box-body">
		            <p>Piloto (Matrícula: <?php echo $pilot; ?>) realizou um pedido de Jumpseat de <?php echo $from; ?> para <?php echo $dest; ?> - Custo: <?php echo $price; ?></p>
		            <p>Processando....</p>
		        </div>
		        
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>
			
<script type="text/javascript">
	$('select').on('change', function() {
	  $('#price').val($('option:selected', this).attr('price'));
	})
</script>