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
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Próximos Eventos</h3>
            </div>
			<div class="box-body">
<?php
if(!$events)
{
    echo '<div class="alert alert-danger">Nenhum Evento Próximo</div>';
}
else
{
    ?>
<center>
    <table border="1px" width="80%">
        <tr>
            <td width="25%"><b>Data:</b></td>
            <td width="60%"><b>Evento:</b></td>
            <td><b>Detalhes/Inscrição</b></td>
        </tr>
            <?php
            foreach($events as $event)
            {
                if($event->active == '2')
                {
                    continue;
                }
        echo '<tr><td>'.date('n/j/Y', strtotime($event->date)).'</td>';
        echo '<td>'.$event->title.'</td>';
        echo '<td><a href="'.SITE_URL.'/index.php/events/get_event?id='.$event->id.'">Detalhes/Inscrição</a></td></tr>';
    }
    ?>
    </table>
</center>
    <?php
}
?>
</div>
</div>
</div>
<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Eventos Passados</h3>
            </div>
			<div class="box-body">

<?php
if(!$history)
{
    echo '<div class="alert alert-danger">Nenhum Evento Passado</div>';
}
else
{
    ?>
<center>      
    <table border="1px" width="80%">
        <tr>
            <td width="25%"><b>Data:</b></td>
            <td width="60%"><b>Evento:</b></td>
            <td><b>Detalhes</b></td>
        </tr>
    <?php
    foreach($history as $event)
    {
        echo '<tr><td>'.date('n/j/Y', strtotime($event->date)).'</td>';
        echo '<td>'.$event->title.'</td>';
        echo '<td><a href="'.SITE_URL.'/index.php/events/get_past_event?id='.$event->id.'">Details</a></td></tr>';
    }
    ?>
    </table>
</center>
    <?php
}
?>
<hr />
<a href="<?php echo url('/events/get_rankings'); ?>">Mostrar Ranks para Eventos</a>
</div>
</div>
</div>
</div>	
</section>