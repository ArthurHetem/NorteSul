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
              <h3 class="box-title">Confirmar início do Exame</h3>
            </div>
            <!-- /.box-header -->
			<div class="box-body table-responsive">
<center>
		<h4>Você deseja continuar?</h4>
		<br>
		<a href="<?php echo SITE_URL ?>/index.php/Exams"><b class="badge bg-red">NÃO</b></a> | <a href="<?php echo SITE_URL ?>/index.php/Exams/purchase_exam?id=<?php echo $examid ?>"><b class="badge bg-green">SIM</b></a>
</center>
</div>
</div>
</div>
</section>