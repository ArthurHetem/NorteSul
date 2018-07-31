    <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(<?php echo SITE_URL; ?>/lib/skins/avianca/images/img_bg_3.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Fale Conosco</h1>
                            <small><ol class="breadcrumb">
  <li>Home</li>
  <li>Organização</li>
  <li class="active"><b>Fale Conosco</b></li>
</ol></small>							
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</header>
	
	
	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3>Deixe aqui o seu recado para a nossa ouvidoria</h3>
					<small>Entre em contato com a nossa equipe e tire dúvidas gerais a partir do nosso formulário abaixo.</small>
					<form  method="POST" action="<?php echo url('/contact'); ?>">
						<div class="row form-group">
							<div class="col-md-12">
						        <?php
		if(Auth::LoggedIn())
		{
			echo "Nome: ".Auth::$userinfo->firstname ." <b>".Auth::$userinfo->lastname ."</b>";
			echo '<input type="hidden" name="name"
					value="'.Auth::$userinfo->firstname
							.' '.Auth::$userinfo->lastname.'" />';
		}
		else
		{
		?>
								<label class="sr-only" for="name">Nome</label>
								<input type="text" id="name" class="form-control" placeholder="Nome*">
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
			echo "Email: ".Auth::$userinfo->email;
			echo '<input type="hidden" name="name"
					value="'.Auth::$userinfo->email.'" />';
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
								<label class="sr-only" for="subject">Assunto</label>
								<input type="text" id="subject" name="subject" class="form-control" placeholder="Assunto*" value="<?php echo $_POST['subject'];?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col-md-12">
								<label class="sr-only" for="message">Mensagem</label>
								<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Mensagem*"><?php echo $_POST['message'];?></textarea>
								<input type="hidden" name="loggedin" value="<?php echo (Auth::LoggedIn())?'true':'false'?>" />
							</div>
						</div>
						<div class="form-group">
							<input type="submit" name="submit" value="Enviar" class="btn btn-primary">
						</div>

					</form>		
				</div>
				<div class="col-md-5 col-md-push-1 animate-box">
					
					<div class="gtco-contact-info">
						<h3>Redes Sociais</h3>
						<a href="https://www.facebook.com/aviancavirtualbr/" class="fab fa-facebook"></a> <a href="https://twitter.com/aviancabrv" class="fab fa-twitter"></a> <a href="https://www.instagram.com/aviancav/" class="fab fa-instagram"></a>
					</div>


				</div>
				</div>
			</div>
		</div>
	</div>