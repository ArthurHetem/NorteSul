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
              <h3 class="box-title">INTRANET Mail | Configurações</h3>
            </div>
			<div class="box-body">
			<div class="row">
			  <?php require 'mail_menu.php' ;?>
              <form action="<?php echo url('/Mail');?>" method="post" enctype="multipart/form-data">
    <center>
        <b>Enviar e-mail quando receber intramail?:</b> 
    <select name="email">
        <option value="0">Não</option>
        <option value="1"<?php if(MailData::send_email(Auth::$userinfo->pilotid) === TRUE){echo 'selected="seclected"';} ?>>Sim</option>
    </select>
    <input type="hidden" name="action" value="save_settings" />
    <input class="btn btn-flat btn-info" type="submit" value="Salvar" />
    </center>
</form>
<center>
    <b><font size="1.5px">| AIRmail3 &copy 2011 | <a href="http://www.simpilotgroup.com">simpilotgroup.com</a> |</font></b>
</center>
</div>
</div>
</div>
</div>	
</section>