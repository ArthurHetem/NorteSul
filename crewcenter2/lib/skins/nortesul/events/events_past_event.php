<?php
//simpilotgroup addon module for phpVMS virtual airline system
//
//simpilotgroup addon modules are licenced under the following license:
//Creative Commons Attribution Non-commercial Share Alike (by-nc-sa)
//To view full license text visit http://creativecommons.org/licenses/by-nc-sa/3.0/
//
//@author David Clark (simpilot)
//@copyright Copyright (c) 2009-2010, David Clark
//@license http://creativecommons.org/licenses/by-nc-sa/3.0/
?>
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-plane fa-4x text-muted"></i></div>
    <h1><strong>Centro</strong> de Eventos</h1>
    <h1><small>Diretoria de Eventos | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
  <div class="row">
  <div class="col-xs-12">
      <div class="box box-solid">
        <div class="box-header with-border">
          <h3 class="box-title">Próximos Eventos</h3>
        </div>
  <div class="box-body">
    <table class="table table-bordered" width="80%" cellpadding="3px">
        <?php
        if($event->image !='none') { ?>
        <tr>
            <td colspan="2"><img src="<?php echo $event->image; ?>" alt="Banner do Evento" /></td>
        </tr>
    <?php
        }
        ?>
        <tr>
            <td width="25%">Evento:</td>
            <td width="75%" align="left"><b><?php echo $event->title; ?></b></td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td align="left"><?php echo $event->description; ?></td>
        </tr>
        <tr>
            <td>Data programada:</td>
            <td align="left"><?php echo date('m/d/Y', strtotime($event->date)); ?></td>
        </tr>
        <tr>
            <td>Horário de início programado: (UTC)</td>
            <td align="left"><?php echo date('G:i', strtotime($event->time)); ?></td>
        </tr>
        <tr>
            <td>Decolagem:</td>
            <td align="left"><?php echo $event->dep; ?></td>
        </tr>
        <tr>
            <td>Pouso:</td>
            <td align="left"><?php echo $event->arr; ?></td>
        </tr>
        <tr>
            <td>Rota:</td>
            <td align="left"><?php echo $event->schedule; ?></td>
        </tr>
        <tr>
            <td>Participantes:</td>
            <td align="left">
        <?php
                if(!$signups)
                {
                    echo 'Nenhum participante';
                }
                else
                {
                    foreach ($signups as $signup)
                        {
                            $pilot = PilotData::getPilotData($signup->pilot_id);
                            echo date('G:i', strtotime($signup->time)).' - ';
                            echo PilotData::GetPilotCode($pilot->code, $pilot->pilotid).' - ';
                            echo $pilot->firstname.' '.$pilot->lastname.'<br />';
                         }
                }
        ?>
            </td>
        </tr>
    </table>
    <br />
    <a href="<?php echo SITE_URL; ?>/index.php/events"><b>Retornar a lista de Eventos</b></a>
  </div>
  </div>
  </div>
  </div>
</section>
