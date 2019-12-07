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
<section class="content-header bg-white espaca">
    <div class="pull-right"><i class="fa fa-picture-o fa-4x text-muted"></i></div>
    <h1>Crew<strong>Shot &trade;</strong></h1>
    <h1><small>Utilities | NorteSul Virtual &copy;
            <?php echo date("Y");?></small>
        <br>
</section>
<section class="content container-fluid">
	<div class="row">
		<div class="col-xs-12">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Upload <b>Wizard</b></h3>
            </div>
      <div class="box-body">
      <h2><b>Rules</b></h2>
      <ol>
<li>Upload must ONLY be a <span class="text-red">flight simulator</span> Screenshot.</li>
<li>Uploading screenshots of livries other than that of the fleet of NorteSul Virtual would be treated as spam and deleted.</li>
<li>By uploading your screenshot to NorteSul Virtual Database, you give your full consent for the staff to use your screenshot for media purposes.</li>
<li>You will be given full credits, if the staff decide to use your upload.</li>
</ol>
<hr>

        <form action="<?php echo url('/Screenshots');?>" method="post" enctype="multipart/form-data">
        <div class="row">
        <div class="form-group">
              <input type="hidden" name="MAX_FILE_SIZE" value="">
              <input type="hidden" name="MAX_FILE_SIZE" value="10000000">
                    <label class="col-md-3 control-label" for="file">File to upload:</label>
              <div class="col-md-3">
                <input class="mail btn btn-md btn-default" id="file" type="file" name="uploadedfile">
              </div>
            </div>
</div>
            <div class="row">
                <br>
            <div class="form-group">
              <label class="col-md-3 control-label" for="description">Description :  </label>
              <div class="col-md-4">
                <textarea class="mail form-control" name="description" placeholder="(DEP &amp; ARR, Flight #, etc)" rows="2" cols="70"></textarea>
              </div>
            </div>
</div>
<div class="row">
    <br>
            <div class="form-group text-center">
              <input type="hidden" name="action" value="save_upload">
              <input class="btn btn-md btn-success" type="submit" value="Upload Screenshot!">
            </div>
</div>
</form>
<a href="<?php echo SITE_URL; ?>/index.php/screenshots" class="btn btn-info"><b><i class="fa fa-arrow-left"></i> Return to CrewShot Gallery</b></a>
</div>
</div>
</div>
</div>	
</section>



