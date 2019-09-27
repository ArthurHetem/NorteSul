<div class="site-blocks-cover overlay" style="background-image: url(<?php echo SITE_URL;?>/lib/skins/nortesul/images/canvas/3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-10">
            <span class="sub-text">Home > Corporation > <strong>Contact us</strong></span>
            <h1><strong>Contact us</strong></h1>
          </div>
        </div>
      </div>
    </div>
	<div class="site-section  border-bottom">
      <div class="container">
		<div class="row">
			<div class="col-md-8">
			 <h3>Leave your message here</h3>
			 Get in touch with our staff and get answers in the form below.
			 <form  method="POST" action="<?php echo url('/contact'); ?>">
						<div class="row form-group">
							<div class="col-md-12">
						        <?php
		if(Auth::LoggedIn())
		{
		?>
			<label class="sr-only" for="name">Name</label>
			<input type="text" id="name" class="form-control disabled" disabled name="name" placeholder="Name*" value="<?php echo Auth::$userinfo->firstname.' '.Auth::$userinfo->lastname;?>">
		<?php					
		}
		else
		{
		?>
								<label class="sr-only" for="name">Name</label>
								<input type="text" id="name" name="name" class="form-control" placeholder="Name*">
								<?php
		}
		?>
							</div>
							
						</div>

						<div class="row form-group">
							<div class="col-md-12">
							<?php
		if(Auth::LoggedIn())
		{
		?>
			<label class="sr-only" for="name">Email</label>
			<input type="text" id="email" class="form-control disabled" disabled name="email" placeholder="Email*" value="<?php echo Auth::$userinfo->email;?>">
		<?php			
		}
		else
		{
			?>
								<label class="sr-only" for="email">Email</label>
								<input type="text" id="email" class="form-control" placeholder="Email*">
								<?php
		}
		?>
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="subject">Subject</label>
								<input type="text" id="subject" name="subject" class="form-control" placeholder="Subject*" value="<?php echo $_POST['subject'];?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Message</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Message*"><?php echo $_POST['message'];?></textarea>
								<input type="hidden" name="loggedin" value="<?php echo (Auth::LoggedIn())?'true':'false'?>" />
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Send" class="btn btn-nsv btn-block">
						</div>

					</form>	
			</div>
			<div class="col-md-4">
				<h3>Social Networks</h3>
				<div class="row">
					<a href="https://www.facebook.com/nortesulvirtual/" class="btn btn-facebook"><i class="fa fa-facebook-f"></i></a>
					<a href="https://twitter.com/nortesulvirtual" class="btn btn-twitter"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/nsv_virtual/" class="btn btn-instagram"><i class="fa fa-instagram"></i></a>
				</div>
				<br>
				<h3>Contact</h3>
				<a href="mailto:support@nortesulvirtual.com" class="btn btn-mail"><i class="fa fa-envelope"></i></a><a href="mailto:support@nortesulvirtual.com"><span class="chatuba btn btn-info">support@nortesulvirtual.com</span></a>
			</div>
		</div>
	</div>
</div>