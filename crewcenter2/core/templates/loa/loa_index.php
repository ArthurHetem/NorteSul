<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Solicitar Afastamento</h3>
            </div>
			<div class="box-body">
           	<div class="alert alert-info">
	<p>Bem vindo ao formulário de pedido de ausência. </p>
</div>	
        Suas Informações: <br/>
<table class="table table-bordered table-striped table-hover">
	<tr>
		<td><strong>Nome</strong></td>
		<td><?php echo Auth::$userinfo->firstname;  ?></td>
	</tr>
	<tr>
		<td><strong>Sobrenome</strong></td>
		<td><?php echo Auth::$userinfo->lastname;  ?></td>
	</tr>
	<tr>
		<td><strong>Email</strong></td>
		<td><?php echo Auth::$userinfo->email;  ?></td>
	</tr>
	<tr>
		<td><strong>Matricula</strong></td>
		<td><?php echo PilotData::GetPilotCode(Auth::$userinfo->code, Auth::$userinfo->pilotid) ?> </td>
	</tr>
</table> 

<div class="alert alert-info">
	<p>
		A Ausencia começa na data em que o formulário é enviado e termina na data selecionada pelo usuário, desde que a data da ausência não seja maior que 30 dias.
Depois desse tempo você estará sujeito à política de inatividade. 
	</p>
</div>
<hr />
<table class="table table-bordered table-striped table-hover">
	<form method="post" action="<?php echo url('/loa/submit');?>">
	<tr>
		<td><strong>Data de inicio: </strong></td>
		<td><?php echo date("Y-m-d"); ?></td>
	</tr>
	<tr>
		<td><strong>Data de término: </strong></td>
		<td>

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

			<select class="form-control" name="day">
				<?php for($i = 1; $i <=31; $i++) {
					echo "<option value='$i'>$i</option>";
				}?>
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
		<td><strong>Motivo: </strong></td>
		<td><textarea class="form-control" name="reason" cols="25" rows="5"></textarea></td>
	</tr>
	<tr>
		<td colspan=2 align=center><input type="submit" class="btn btn-flat btn-info btn-block" value="Enviar"/></td>
	</tr>
</table>

</form>
</div>
</div>
</div>
</div>	
</section>