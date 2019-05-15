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

$pilot = PilotData::getPilotData($screenshot->pilot_id);
?>
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-picture-o fa-4x text-muted"></i></div>
    <h1>Centro de <strong>screenshots</strong></h1>
    <h1><small>Utilidades | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Screenshot <strong>ViewTool</strong></h3>
                    <div class="pull-right box-tools">
                        <span class="label label-success"><?php echo $screenshot->id; ?></span>
                    </div>
                </div>
                <div class="box-body">
                  <table>
                  <tr>
                      <td>
                          <?php
                              $previous = ScreenshotsData::get_previous($screenshot->id);
                              if(!$previous)
                              {echo '&nbsp'; }
                              else
                              {
                          ?>
                          <form method="post" action="<?php echo SITE_URL ?>/index.php/Screenshots" >
                          <input type="hidden" name="action" value="last" />
                          <input type="hidden" name="id" value="<?php echo $previous->id; ?>" />
                          <input class="mail btn btn-info waves-effect" type="submit" value="Anterior">
                          </form>
                          <?php
                              }
                              ?>
                      </td>
                      <td colspan="2" align="right">
                          <?php
                              $next = ScreenshotsData::get_next($screenshot->id);
                              if(!$next)
                              {echo '&nbsp'; }
                              else
                              {
                          ?>
                          <form method="post" action="<?php echo SITE_URL ?>/index.php/Screenshots" >
                          <input type="hidden" name="action" value="last" />
                          <input type="hidden" name="id" value="<?php echo $next->id; ?>" />
                          <input class="mail btn btn-info waves-effect" type="submit" value="Próxima">
                          </form>
                          <?php
                              }
                              ?>
                      </td>
                  </tr>
                  <tr>
            <td colspan="3"><hr></td>
        </tr>
                  <tr>
                      <td width="70%"valign="top"><h4>Enviado por <?php echo $pilot->firstname.' '.$pilot->lastname.' - '.PilotData::GetPilotCode($pilot->code, $pilot->pilotid); ?></h4></td>

                      <td align="center">
                          <b>Interações:</b> <?php echo $screenshot->rating; ?>
                      </td>
                      <td  width="15%" valign="bottom">
                          <?php
                              if(Auth::loggedin())
                              {
                              $boost = ScreenshotsData::check_boost(Auth::$userinfo->pilotid, $screenshot->id);
                              if($boost->total > 0)
                              {echo 'Já interagiu, obrigado!';}
                              else
                              {
                              ?>
                              <form method="post" action="<?php echo SITE_URL ?>/index.php/Screenshots/addkarma">
                              <input type="hidden" name="id" value="<?php echo $screenshot->id; ?>" />
                              <input class="btn btn-warning" type="submit" value="Interagir"></form>
                              <?php
                              }
                              }
                              else
                              {echo 'Faça login para interagir'; }
                              ?>
                      </td>
                  </tr>
                  <tr>
                      <td>
                          <b>Data do envio:</b> <?php echo date('d/m/Y', strtotime($screenshot->date_uploaded)); ?><br />
                          <b>Descrição:</b> <?php
                                                  if(!$screenshot->file_description)
                                                  {echo 'Nenhuma descrição disponível';}
                                                  else
                                                  {echo $screenshot->file_description;} ?>
                          <br /></td>
                      <td align="center"><b>Visualizações:</b> <?php echo $screenshot->views; ?></td>
                      <td>
                            <?php if(PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN))
                                  { ?><a class="btn btn-danger" href="<?php echo SITE_URL ?>/index.php/Screenshots/delete_screenshot?id=<?php echo $screenshot->id; ?>">Deletar screenshot</a><?php } else {} ?>
                          <a href="<?php echo SITE_URL ?>/index.php/Screenshots" class="btn btn-warning">Voltar à galeria</a>
                      </td>
                  </tr>
                  <tr>
                      <td colspan="3"><hr /></td>
                  </tr>
                  <tr>
                      <td align="center" colspan="3">
                          <img src="<?php echo SITE_URL; ?>/pics/<?php echo $screenshot->file_name; ?>" width="920px" height="auto;"  alt="<?php echo $screenshot->file_description; ?>" />
                      </td>
                  </tr>
                  <tr>
                      <td colspan="3"><hr /></td>
                  </tr>
                  <tr>
                      <td colspan="2"><h4>Comentários:</h4></td>
                      <td>Postado por:</td>
                  </tr>
                  <?php if(!$comments)
                      {echo '<tr><td colspan="3">Nenhum comentário encontrado</td></tr>';}
                      else
                      {
                          echo '<tr><td colspan="3"><hr class="comment" /></td></tr>';
                          foreach($comments as $comment){
                              $pilot = PilotData::getPilotData($comment->pilot_id);
                              echo '<tr>';
                              echo '<td colspan="2">'.$comment->comment.'</td>';
                              echo '<td>'.$pilot->firstname.' '.$pilot->lastname.' - '.PilotData::getPilotCode($pilot->code, $pilot->pilotid).'</td>';
                              echo '</tr>';
                              echo '<tr><td colspan="3"><hr class="comment" /></td></tr>';
                          }
                      }
                  ?>
                  <tr>
                      <td colspan="3"><hr /></td>
                  </tr>
                  <?php if(Auth::LoggedIn())
                  { ?>
                  <tr>
                      <td colspan="3"><h4>Adicionar comentário:</h4></td>
                  </tr>
                  <tr>
                      <td colspan="3">
                          <br />
                          <form action="<?php echo url('/Screenshots');?>" method="post" enctype="multipart/form-data">
                          <textarea class="form-control" name="comment" cols="50" rows="4"></textarea>
                              <br /><br />
                              <input type="hidden" name="id" value="<?php echo $screenshot->id; ?>" />
                              <input type="hidden" name="action" value="add_comment" />
                                  <input  type="submit" class="btn btn-info" value="Adicionar">
                          </form>
                      </td>
                  </tr>
                  <?php }
                  else
                  { ?>
                  <tr>
                      <td colspan="3">Faça login para comentar!</td>
                  </tr>
                  <?php } ?>
              </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End container -->
</section>
