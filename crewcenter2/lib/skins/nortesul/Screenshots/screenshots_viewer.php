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


$pagination = new Pagination();
$pagination->setLink("screenshots?page=%s");
$pagination->setPage($page);
$pagination->setSize($size);
$pagination->setTotalRecords($total);
$screenshots = ScreenshotsData::getpagnated($pagination->getLimitSql());
?>
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-picture-o fa-4x text-muted"></i></div>
    <h1>Crew<strong>Shot &trade;</strong></h1>
    <h1><small>Utilities | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
    <div class="row">
    <div class="col-md-12">
      <div class="box box-widget widget-user">
          <!-- Add the bg color to the header using any of the bg-* classes -->
          <div class="widget-user-header bg-white">
              <h3 class="widget-user-username text-center"><strong>Screenshots</strong></h3>
              <h3 class="widget-user-desc text-center"><small>The best of the best!</small></h3>
              <h3 class="widget-user-desc text-center">
              <?php
              if(Auth::LoggedIn())
                  {
                      if(PilotGroups::group_has_perm(Auth::$usergroups, ACCESS_ADMIN))
                      {
                          echo '<form method="link" action="'.SITE_URL.'/index.php/screenshots/approval_list">
                              <button class="btn-rounded btn btn-warning" type="submit"><i class="fa fa-cog"></i> Admin</button></form><br />';
                      }
                      echo '<form method="link" action="'.SITE_URL.'/index.php/screenshots/upload">
                      <button class="btn-rounded btn btn-success" type="submit"><i class="fa fa-cloud-upload"></i> Upload Mine</button></form></td>';
                   }
                   ?>
              </h3>
          </div>
          <div class="box-footer">
              <div class="row">
                <center>
            <?php
            if (!$screenshots) {echo '<div class="alert alert-danger">Não Existem Screenshots na Galeria!</div>'; }
            else {
                echo '<table class="table">';
                $tiles=0;
                foreach($screenshots as $screenshot) {
                    $pilot = PilotData::getpilotdata($screenshot->pilot_id);
                    if(!$screenshot->file_description)
                    {$screenshot->file_description = 'Not Available';}
                    $contaComment = count(ScreenshotsData::get_comments($screnshot->id));
                    $v = $screenshot->views;
                    $limit = 100;
                    if($v < $limit)
                      {
                        $views = $screenshot->views;
                        $ratings = $rating;
                      }
                      else

                      {
                        $views = $screenshot->views;
                        $ratings = '<i class="fa fa-signal"></i> ASCENDENDO';
                      }

                    echo '<td width="25%" valign="top"><br />
                                      <div class="img_wrap">
                                        <img class="img_img" src="'.SITE_URL.'/pics/'.$screenshot->file_name.'" border="0" width="340px" height="200px" alt="By: '.$pilot->firstname.' '.$pilot->lastname.'" />
                                        <div class="img_description"><a href="'.SITE_URL.'/index.php/Screenshots/large_screenshot?id='.$screenshot->id.'" class="btn btn-sm btn-default btn-rounded e10"><i class="fa fa-eye"></i> '.$views.'</a>
                                        <a href="'.SITE_URL.'/index.php/Screenshots/large_screenshot?id='.$screenshot->id.'" class="btn btn-sm btn-default btn-rounded e10"><i class="fa fa-thumbs-up"></i> '.$screenshot->rating.'</a>
                                        <a href="'.SITE_URL.'/index.php/Screenshots/large_screenshot?id='.$screenshot->id.'" class="btn btn-sm btn-default btn-rounded e10"><i class="fa fa-comments"></i> '.$contaComment.'</a>
                                        <br>
                                        <br>
                                        <a href="'.SITE_URL.'/pics/'.$screenshot->file_name.'" class="btn btn-sm bg-olive btn-rounded">Ver</a>
                                        </div>
                                      </div> <br><br>

                            </td>';
                    $tiles++;
                    if ($tiles == '4') {  echo '</tr>'; $tiles=0; }
                }
                echo '</table>';
            }
            echo '<div class="col-md-12">
	<div class="pull-center">
		<div class="text-center">';
            $navigation = $pagination->create_links();
            echo $navigation;
            echo '</div>
                  </div>
                  </div>';
            ?>
                </center>
  </div>
  </div>
  </div>
</div>
<!-- End container -->
</section>
