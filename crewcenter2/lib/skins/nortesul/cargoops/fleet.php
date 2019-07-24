<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
          <div class="box box-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-black">
            <h3 class="widget-user-username text-center"><b>Nossa</b> Frota de Carga</h3>
          </div>
          <div class="box-footer">
                         <div class="row">
            <?php
            if(!$aircraft)
            {
            return;
            }
             foreach($aircraft as $ac)
            {
            ?>
  <div class="col-sm-4 col-md-3">
    <div class="thumbnail text-center">
      <?php if(!$ac->imagelink) echo '<span class="label label-danger">Nenhuma imagem encontrada</span>'; ?><img src="<?php echo $ac->imagelink; ?>" class="levanta">
      <div class="caption">
        <h3><?php echo $ac->fullname; ?> <small><span class="label label-success"><?php echo $ac->registration; ?></span></small></h3>
        <p>Capacidade: <?php echo $ac->maxcargo; ?> kgs</p>
      </div>
    </div>
  </div>

             <?php
             }
             ?>
            <!-- /.row -->
            </div>
          </div>
        </div>
        </div>
    </div>
    <!-- End container -->
</section>
