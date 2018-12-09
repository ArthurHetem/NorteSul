<?php
//simpilotgroup addon module for phpVMS virtual airline system
//
//simpilotgroup addon modules are licenced under the following license:
//Creative Commons Attribution Non-commercial Share Alike (by-nc-sa)
//To view full icense text visit http://creativecommons.org/licenses/by-nc-sa/3.0/
//
//@author David Clark (simpilot)
//@copyright Copyright (c) 2009-2010, David Clark
//@license http://creativecommons.org/licenses/by-nc-sa/3.0/
?>
<section class="content-header">
      <h1>
        Centro de Exames
      </h1>
    </section>
	<section class="content container-fluid">
	<div class="row">
		   <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Administração dos Exames Existentes</h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
<center>
    <table class="table table-bordered table-hover">
        <tr bgcolor="#cccccc">
            <td>Ativo</td>
            <td>Título</td>
            <td>Custo</td>
            <td>Data da Criação</td>
            <td>Última Atualização</td>
            <td>Versão</td>
            <td colspan="2">Editar</td>
        </tr>
        <?php
        foreach ($exams as $data) {
            ?> 	<tr>
            <td><?php
    if ($data->active == 0) { echo '<div class="label label-danger">Não</div>';}
                    else { echo '<div class="label label-success">Sim</div>';}
                    ?></td>
                    <?php echo
                    '<td>'.$data->exam_description.'</td>
                        <td>$'.$data->cost.'</td>
                        <td>'.date(DATE_FORMAT, strtotime($data->created_date)).'</td>
                        <td>'.date(DATE_FORMAT, strtotime($data->last_changed)).'</td>
                        <td>ver-'.$data->version.'</td>
                        <td> <a href="'.SITE_URL.'/index.php/Exams_admin/edit_exam?id='.$data->id.'" class="btn btn-flat btn-info">Exame</a></td>
                        <td> <a href="'.SITE_URL.'/index.php/Exams_admin/edit_questions?id='.$data->id.'" class="btn btn-flat btn-info">Questões do Exame</a></td>
                <tr>';
                }?>

    </table><br />



    <form method="link" action="<?php echo SITE_URL ?>/index.php/Exams_admin">
        <input type="submit" class="btn btn-flat btn-info" value="Voltar ao Painel de Administração do Centro de Exames"></form>
</center>
</div>
</div>
</div>
</section>