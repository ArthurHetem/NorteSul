<?php
//AIRMail3
//simpilotgroup addon module for phpVMS virtual airline system
//
//simpilotgroup addon modules are licenced under the following license:
//Creative Commons Attribution Non-commercial Share Alike (by-nc-sa)
//To view full icense text visit http://creativecommons.org/licenses/by-nc-sa/3.0/
//
//@author David Clark (simpilot)
//@copyright Copyright (c) 2009-2011, David Clark
//@license http://creativecommons.org/licenses/by-nc-sa/3.0/
?>
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-envelope fa-4x text-muted"></i></div>
    <h1><strong>iMail</strong></h1>
    <h1><small>Comunicações e recursos | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<?php
    foreach ($mail as $data) {
?>
<section class="content container-fluid">
    <div class="row">
      <div class="col-md-3">
          <div class="box box-solid">
              <div class="box-header with-border">
                  <a href="<?php echo SITE_URL; ?>/index.php/Mail/newmail">
                      <div class="btn btn-rounded btn-default"><i class="fa fa-pencil"></i> Escrever novo e-mail</div>
                  </a>
                  <div class="pull-right box-tools">
                      <button class="btn btn-default btn-rounded" onclick="goBack()" data-toggle="tooltip" title="Página anterior"><i class="fa fa-arrow-left"></i></button>
                      <button class="btn btn-default btn-rounded" onclick="location.reload();" data-toggle="tooltip" title="Recarregar"><i class="fa fa-refresh"></i></button>
                  </div>
              </div>

              <div class="box-body">
                  <ul class="nav nav-pills nav-stacked">
                      <table class="table table-borderless table-striped table-vcenter">
                          <tbody>
                              <tr>
                                  <td>
                                      ID
                                  </td>
                                  <td>
                                      <span class="label label-info">
                                          <?php
            $firstName = Auth::$userinfo->firstname;
            $firstName = strtolower($firstName);

            $lastName = Auth::$userinfo->lastname;
            $lastName = strtolower($lastName);
            ?>
                                          <?php echo $firstName; ?>.
                                          <?php echo $lastName; ?>@nortesulvirtual.com</span>
                                  </td>
                              </tr>
                          </tbody>
                      </table>

                      <li class="">
                          <a href="<?php echo SITE_URL; ?>/index.php/Mail">
                              <strong>Caixa de entrada</strong>
                          </a>
                      </li>

                      <li class="">
                          <a href="<?php echo SITE_URL; ?>/index.php/Mail/settings">
                              <strong>Configurações</strong>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
        <div class="col-md-9">
            <div class="box box-solid">
                <div class="box-header with-border">
                  <h3 class="box-title"><i class="fa fa-paper-plane"></i><strong>iMail</strong> de
                  <?php
                      if($data->who_to == Auth::$userinfo->pilotid){
                          $user = PilotData::GetPilotData($data->who_from);
                          $pilot = PilotData::GetPilotCode($user->code, $data->who_from);
                      }
                      if($data->who_from == Auth::$userinfo->pilotid){
                          $user = PilotData::GetPilotData($data->who_to);
                          $pilot = PilotData::GetPilotCode($user->code, $data->who_to);
                      }
                      echo $user->firstname.' '. $user->lastname.' - '.$pilot;
                  ?></h3>
                </div>

                <div class="box-body">
                  <h2 class="text-green"><?php echo $data->subject; ?></h2>
                  <hr>
                  <?php echo nl2br($data->message); ?>
                  <a href="<?php echo SITE_URL ?>/index.php/Mail/reply/<?php echo $data->thread_id;?>" class="btn btn-default"><i class="fa fa-reply text-green"></i> Responder</a>
                  <hr>
                  <span class="text-muted"><?php echo date(DATE_FORMAT.' h:ia', strtotime($data->date)); ?> para <?php
$firstName = Auth::$userinfo->firstname;
$firstName = strtolower($firstName);

$lastName = Auth::$userinfo->lastname;
$lastName = strtolower($lastName);
?>
                  <?php echo $firstName; ?>.<?php echo $lastName; ?>@nortesulvirtual.com</span> </span>


            <?php
            }
            ?>
</div>
</div>
</div>
</div>
</section>
