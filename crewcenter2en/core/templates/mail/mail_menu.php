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
<?php if(isset($message)) {echo $message.'<br />';} ?>
<table width="100%">
    <tr>
        <td align="left" width="20%"><img src="<?php echo SITE_URL?>/lib/skins/avianca/assets/admin/layout/img/logo.png" border="0" alt="AIRMail" width="100px" height="40px"/></td>
        <td align="center">
            | <a href="<?php echo SITE_URL ?>/index.php/Mail">Inbox</a> |
            <a href="<?php echo SITE_URL ?>/index.php/Mail/newmail">Nova Mensagem</a> |
            <a href="<?php echo SITE_URL ?>/index.php/Mail/settings">Opções</a> |
            <a href="<?php echo SITE_URL ?>/index.php/Mail/sent">Enviadas</a> |
        </td>
        <td width="20%" align="right"><img src="<?php echo SITE_URL?>/core/modules/Mail/mailimages/mail_small.png" border="0" alt="AIRMail" /></td>
    </tr>
</table>