<?php
//simpilotgroup addon module for phpVMS virtual airline system
//
//simpilotgroup addon modules are licenced under the following license:
//Creative Commons Attribution Non-commercial Share Alike (by-nc-sa)
//To view full icense text visit http://creativecommons.org/licenses/by-nc-sa/3.0/
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
              <h3 class="box-title">Galeria de Screenshots <small>Enviar Screenshot</small></h3>
            </div>
      <div class="body">
        <form action="<?php echo url('/Screenshots');?>" method="post" enctype="multipart/form-data">
    <table class="profiletop">
        <tr>
            <td width="50%" valign="top">
                <h5>Termos e Condições</h5>
                <ul>
                    <li>Enviando sua screenshot, você dá permissão total para a NorteSul usá-la para o bem da V.A</li>
                    <li>Sua Screenshot será rejeitada caso contenha algo fora do tema Flight Simulator</li>
                </ul>
            </td>
            <td>
                <p>
                    <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
                </p>

                <p>
                    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
                    <label for="file">Arquivo para enviar:</label><br />
                    <input class="mail btn btn-info" id="file" type="file" name="uploadedfile" />
                </p>

                <p>
                    <label for="description">Insira uma descrição para a Screenshot:</label><br />
                    <textarea class="mail form-control" name="description" rows="5" cols="50"></textarea>
                </p>

                <p>
                    <input type="hidden" name="action" value="save_upload" />
                    <input class="btn-flat btn btn-success waves-effect" type="submit" value="Enviar arquivo!">
                </p>
            </td>
        </tr>
    </table>
</form>
</div>
</div>
</div>
</div>	
</section>



