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
    <h1><small>Communications and Resources | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>

<section class="content container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <a href="<?php echo SITE_URL; ?>/index.php/Mail/newmail">
                        <div class="btn btn-rounded btn-default"><i class="fa fa-pencil"></i> Write new e-mail</div>
                    </a>
                    <div class="pull-right box-tools">
                        <button class="btn btn-default btn-rounded" onclick="goBack()" data-toggle="tooltip" title="Previous Page"><i class="fa fa-arrow-left"></i></button>
                        <button class="btn btn-default btn-rounded" onclick="location.reload();" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i></button>
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
                                <strong>Inbox</strong> <div class="pull-right"><span class="label label-default"><?php MainController::Run('Mail', 'checkmail'); ?></span></div>
                            </a>
                        </li>

                        <li class="">
                            <a href="<?php echo SITE_URL; ?>/index.php/Mail/settings">
                                <strong>Settings</strong>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <i class="fa fa-cog"></i>

                    <h3 class="box-title"><strong>iMail</strong> Settings</h3>
                </div>
                <div class="box-body">
                    <form action="<?php echo url('/Mail');?>" method="post" enctype="multipart/form-data">
                        <center>
                            Send alert to
                            <?php echo Auth::$userinfo->email; ?> when there is a new iMail?: <br>
                            <select name="email" class="form-control">
                                <option value="0">No</option>
                                <option value="1" <?php if(MailData::send_email(Auth::$userinfo->pilotid) === TRUE){echo 'selected="seclected"';} ?>>Yes</option>
                            </select>
                            <br>
                            <input type="hidden" name="action" value="save_settings" />
                            <input class="btn btn-flat btn-bg-gray" type="submit" value="Save" />
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
