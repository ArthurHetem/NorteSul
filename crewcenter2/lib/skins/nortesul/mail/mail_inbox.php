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
//Edited By Arthur Hetem 13/06/2017
// Re-edited to CrewCenter V2 31/01/2019 By Arthur Hetem
?>
<!-- Content Header (Page header) -->
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-envelope fa-4x text-muted"></i></div>
    <h1><strong>iMail</strong></h1>
    <h1><small>Comunicações e recursos | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>

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
                                            <?php echo $firstName; ?>.<?php echo $lastName; ?>@nortesulvirtual.com</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <li class="">
                            <a href="<?php echo SITE_URL; ?>/index.php/Mail">
                                <strong>Caixa de entrada</strong> <div class="pull-right"><span class="label label-default"><?php MainController::Run('Mail', 'checkmail'); ?></span></div>
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
                    <i class="fa fa-paper-plane"></i>

                    <h3 class="box-title"><strong>iMail</strong> Caixa de entrada</h3>
                </div>
                <div class="box-body">
                    <div class="pull-right text-muted">
                        <?php
				$quantos = count($mail);
				echo "Você possui " .$quantos. " iMails";
				?>
                    </div>
                    <br>
                    <div class="table-responsive mailbox-messages">
                        <table class="table table-striped table-hover">
                            <?php if(!$mail) {
        echo '<tr><td colspan="5"><span class="alert alert-danger">Você não possui nenhuma mensagem.</span></td></tr>';
        }
        else {
            foreach($mail as $data) {
                if ($data->read_state=='0') {
                    $status = 'fa-envelope' ;
                    $tooltip = 'não lido';
                }
                else {
                    $status = 'fa-envelope-open';
                    $tooltip = 'lido';
                }
                ?>
                            <tbody>
                                <?php $user = PilotData::GetPilotData($data->who_from); $pilot = PilotData::GetPilotCode($user->code, $data->who_from); ?>
                                <tr bgcolor="#eeeeee">
                                    <td align="center"><i class="fa <?php echo $status; ?>" data-toggle="tooltip" title="iMail <?php echo $tooltip; ?>"></i></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="<?php echo SITE_URL;?>/index.php/Mail/delete/<?php echo $data->id;?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Deletar"><i class="fa fa-trash text-red"></i></button></a>
                                            <a href="<?php echo SITE_URL;?>/index.php/Mail/reply/<?php echo $data->thread_id; ?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Responder"><i class="fa fa-reply text-green"></i></button></a>
                                            <a href="<?php echo SITE_URL;?>/index.php/Mail/item/<?php echo $data->thread_id; ?>"><button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Ver"><i class="fa fa-eye"></i></button></a>
                                        </div>
                                    </td>
                                    <td align="center"><span class="label label-default">
                                            <?php echo $pilot; ?></span> |
                                        <?php echo "$user->firstname $user->lastname"; ?>
                                    </td>
                                    <td align="center"><a href="<?php echo SITE_URL ?>/index.php/Mail/item/<?php echo $data->thread_id;?>">
                                            <?php echo $data->subject; ?></a> <small class="text-muted"><?php echo substr($data->message, 0, 20);?>...</small></td>
                                    <td align="center">
                                        <?php
    $first_date = date(DATE_FORMAT, strtotime($data->date));
    $second_date = date("d/m/Y");
    $days_diff = $second_date - $first_date;
	echo $days_diff .' dias atrás';
?>
                                    </td>
                                </tr>
                            </tbody>
                            <?php
}
?>
                            <?php
        }
        ?>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>
