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
?>
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
			<!-- BEGIN PAGE HEADER-->
			<h3 class="page-title">
		<small><span class="badge badge-roundless badge-success">Versão Alpha do Despacho Operacional</span></small>
			</h3>
            <hr>
			<!-- END PAGE HEADER-->
			<!-- BEGIN DASHBOARD STATS -->
			<div class="row">
			<?php require 'mail_menu.php' ;?>
                    <div class="portlet box green">
                        <div class="portlet-title">
                            <div class="caption">
                                 <i class="fa fa-comments"></i>Escrever Nova Mensagem</div></div></div>
                                <center>
    <form action="<?php echo url('/Mail');?>" method="post" enctype="multipart/form-data">
        <table cellspacing="1" cellpadding="5" border="1" width="100%">
            <tr bgcolor="#cccccc">
                <td colspan="2">
                    <b>Para:</b>
                    <select name="who_to">
                        <option value="">Select a pilot</option>
                        <?php if(PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN)) {
                            ?>
                        <option value="all">NÃO UTILIZAR</option>
                        <?php
                        }
                        foreach($allpilots as $pilots) {
                            echo '<option value="'.$pilots->pilotid.'">'.$pilots->firstname.' '.$pilots->lastname.' - '.PilotData::GetPilotCode($pilots->code, $pilots->pilotid).'</option>';
                        }
                        ?>
                    </select>
                </td>
                <td><b>Assunto:<input type="text" name="subject"></b></td>
            </tr>
            <tr bgcolor="#eeeeee">
                <td colspan="3"><b>Mensagem:</b><br /><br />
                    <textarea name="message" rows="10" cols="100"></textarea></td></tr>
            <tr bgcolor="#cccccc">
                <td colspan="3">
                    <input type="hidden" name="who_from" value="<?php echo Auth::$userinfo->pilotid ?>" />
                    <input type="hidden" name="action" value="send" />
                    <input type="submit" class="btn red" value="Enviar">
                </td>
            </tr>
            <tr>
                <td colspan="3"><b><font size="1.5px">| AIRmail3 &copy 2011 | <a href="http://www.simpilotgroup.com">simpilotgroup.com</a> |</font></b></td>
            </tr>
        </table>
    </form>
</center>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
			</div>
			<!-- END DASHBOARD STATS -->
			<div class="clearfix">
			</div>