<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-deaf fa-4x text-muted"></i></div>
    <h1><strong>Pedido de afastamento</strong></h1>
    <h1><small>Recursos humanos | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
			<div class="row">
			<div class="col-md-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Nossa política de afastamento</h3>
            </div>
			<div class="box-body">
				<ol>
					<li>O/A piloto deve ser membro da NorteSul Virtual por no mínimo três (3) meses para ter direito a:
					<ol>
						<li><b>Licença prêmio</b>, que é a licença garantida aos pilotos por motivos de qualquer natureza, a licença é um privilégio, não um direito, tendo uma duração de não mais de 180 dias, cabendo ao RH a autorização ou não da licença.</li>
						<li><b>Licença militar</b>, que é destinada aos pilotos que ao completarem 18 anos, de acordo com as leis brasileiras foram convocados a servir a nação. Nós da NorteSul, em gratidão pelo serviço àquekes que, com afinco decidiram servir as Forças Armadas. Tempo máximo da licença: 365 dias.</li>
					</ol>
					<li>O piloto pode retornar as atividades a qualquer momento.</li>
					<li>Durante o afastamento, o piloto tem liberdade de aceitar o CrewCenter.</li>
					<li>Quando autorizado o afastamento, o piloto não pode pedir extensão do tempo, tendo que esperar o término do mesmo, para requisitar novamente.</li>
				</li>
				</ol>
				<br>
				<blockquote>
                <p>Nome: <?php echo Auth::$userinfo->firstname;?> <?php echo Auth::$userinfo->lastname;?></p>
								<p>Rank: <?php echo Auth::$userinfo->rank;?></p>
								<p>ID de piloto: <?php echo PilotData::GetPilotCode(Auth::$userinfo->code, Auth::$userinfo->pilotid) ?></p>
								<p>HUB: <?php echo Auth::$userinfo->hub;?></p>
								<p>Email: <?php echo Auth::$userinfo->email;?></p>
								<p>Status da conta: <?php echo Auth::$userinfo->rank;?></p>
								<p>Status da conta: <?php if (Auth::$userinfo->retired == 3){
									echo '<span class="label label-success"><i class="fa fa-check"></i> Ativa</span>';
								} else{
									echo '<span class="label label-warning"><i class="fa fa-exclamation-triangle"></i> Verificar com RH</span>';
								}
								?></p>
              </blockquote>
						</div>
						</div>
						</div>
						<div class="col-md-12">
								<div class="box box-solid">
									<div class="box-header with-border">
										<h3 class="box-title">Formulário de afastamento</h3>
									</div>
						<div class="box-body">
<div class="alert alert-danger">
	<p>
		Detalhes sobre seu afastamento serão enviados para seu email. Tenha certeza de que seu email está correto no sistema.
	</p>
</div>
<hr />
<table class="table table-bordered table-striped table-hover">
	<form method="post" action="<?php echo url('/loa/submit');?>">
	<tr>
		<td><strong>Data de inicio: </strong></td>
		<td><?php echo date("d/m/Y"); ?></td>
	</tr>
	<tr>
		<td><strong>Data de término: </strong></td>
		<td>

			<select class="form-control" name="day">
				<?php for($i = 1; $i <=31; $i++) {
					echo "<option value='$i'>$i</option>";
				}?>
			</select>

			<select class="form-control" name="month">
			<option value='1'>Janeiro</option>
			<option value='2'>Fevereiro</option>
			<option value='3'>Março</option>
			<option value='4'>Abril</option>
			<option value='5'>Maio</option>
			<option value='6'>Junho</option>
			<option value='7'>Julho</option>
			<option value='8'>Agosto</option>
			<option value='9'>Setembro</option>
			<option value='10'>Outubro</option>
			<option value='11'>Novembro</option>
			<option value='12'>Dezembro</option>
			</select>

			<select class="form-control" name='year'>

					<?php $year = date('Y');
						  $year_end = $year + 5;

							 for($i = $year ; $i < $year_end; $i++) {
							echo "<option value='$i'>$i</option>";
						}?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Motivo</td>
		<td><textarea class="form-control" name="reason" cols="25" rows="5"></textarea></td>
	</tr>
	<tr>
		<td colspan=2 align="right"><input type="submit" class="btn btn-rounded btn-info" value="Enviar!"/></td>
	</tr>
</table>

</form>
</div>
</div>
</div>
</div>
</section>
