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
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Intra-mail | New Message</h3>
            </div>
			<div class="box-body">
			<div class="row">
			<?php require 'mail_menu.php' ;?>
                                <center>
    <form action="<?php echo url('/Mail');?>" method="post" enctype="multipart/form-data">
        <table class="table table-bordered">
            <tr>
                <td colspan="2">
                    <b>To:</b>
                    <select class="form-control" name="who_to">
                        <option value="">Select pilot</option>
                        <?php if(PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN)) {
                            ?>
                        <option value="all">DONT USE</option>
                        <?php
                        }
                        foreach($allpilots as $pilots) {
                            echo '<option value="'.$pilots->pilotid.'">'.$pilots->firstname.' '.$pilots->lastname.' - '.PilotData::GetPilotCode($pilots->code, $pilots->pilotid).'</option>';
                        }
                        ?>
                    </select>
                </td>
                <td><b>Subject:<input class="form-control" type="text" name="subject"></b></td>
            </tr>
            <tr>
                <td colspan="3"><b>Message:</b><br /><br />
                    <textarea class="form-control" name="message" rows="10" cols="100"></textarea></td></tr>
            <tr>
                <td colspan="3">
                    <input type="hidden" name="who_from" value="<?php echo Auth::$userinfo->pilotid ?>" />
                    <input type="hidden" name="action" value="send" />
                    <input type="submit" class="btn btn-flat btn-block btn-info" value="Send">
                </td>
            </tr>
            <tr>
                <td colspan="3"><b><font size="1.5px">| AIRmail3 &copy 2011 | <a href="http://www.simpilotgroup.com">simpilotgroup.com</a> |</font></b></td>
            </tr>
        </table>
    </form>
</center>
</div>
</div>
</div>
</div>
</section>
