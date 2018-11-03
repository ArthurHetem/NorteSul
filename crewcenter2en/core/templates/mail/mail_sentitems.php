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
<section class="content container-fluid">
			<div class="row">
			<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Intra-mail | Sent Messages</h3>
            </div>
			<div class="box-body">
			<div class="row">
			  <?php require 'mail_menu.php' ;?>
                      <center>
        <table class="table table-bordered">
        <?php
        if(!$mail) {
            echo '<tr><td colspan="5">You have no sent messages.</td></tr>';
        }
        else {
            ?>
            <tr>
                <td colspan="5" align="center"><b>Sent messages by <?php echo Auth::$userinfo->firstname.' '.Auth::$userinfo->lastname.' - '.$pilotcode; ?></th>
            </tr>
            <tr>
                <th>Status</th>
                <th>To</th>
                <th>Subject</th>
                <th>Sent date</th>
                <th>Delete</th>
            </tr>
    <?php
        foreach($mail as $thread){
            if($thread->read_state=='0'){
                if($thread->deleted_state == '0'){
                    $status = 'env_closed.gif" alt="The recipiant has not read your message.';
                }else{
                    $status = 'env_closed_deleted.gif" alt="The recipiant did not read this message before deleting it.';
                }
            }else{
                if($thread->deleted_state == '0'){
                    $status = 'env_open.gif" alt="The recipiant has read your message.';
                }else{
                    $status = 'env_open_deleted.gif" alt="The recipiant has read and discarded your message.';
                }
            }
            $user = PilotData::GetPilotData($thread->who_to); $pilot = PilotData::GetPilotCode($user->code, $thread->who_to);
    ?>
            <tr>
                <td align="center"><img src="<?php echo SITE_URL?>/core/modules/Mail/mailimages/<?php echo $status;?>" border="0" /></td>
                <td align="center"><?php
                    if ($thread->notam=='1') {
                        echo 'NOTAM (All Pilots)';
                    }
                    else {
                        echo $user->firstname.' '.$user->lastname; ?> <?php echo $pilot;
                    } ?>
                </td>
            <td align="center"><a href="<?php echo SITE_URL ?>/index.php/Mail/item/<?php echo $thread->thread_id.'/'.$thread->who_to;?>"><?php echo $thread->subject; ?></a></td>
                <td align="center"><?php echo date(DATE_FORMAT.' h:ia', strtotime($thread->date)); ?></td>
                <td align="center"><a href="<?php echo SITE_URL ?>/index.php/Mail/sent_delete/?mailid=<?php echo $thread->id;?>"><img src="<?php echo SITE_URL?>/core/modules/Mail/mailimages/delete.gif" alt="Delete" border="0"/></a></td>

            </tr>
    <?php
    }
}
?>
            <tr>
                <td colspan="4"><b><font size="1.5px">| AIRmail3 &copy 2011 | <a href="http://www.simpilotgroup.com">simpilotgroup.com</a> |</font></b></td>
                <td align="center"><a href="<?php echo url('/mail/delete_allsent'); ?>" onclick="return confirm('Delete All Sent Messages From View?')">Remover tudo</a></td>
            </tr>
        </table>
    </center>
</div>
</div>
</div>
</div>
</section>
