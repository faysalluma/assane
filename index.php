<?php
$result=null;
if(isset($_POST['nomprenoms'])  AND !empty ($_POST['email']) AND !empty ($_POST['message'])){
	extract($_POST); 
	$nomprenoms=nl2br(stripslashes($nomprenoms));
	$email=nl2br(stripslashes($email));
	$message=nl2br(stripslashes($message));
	
	$destinataire="faysalgluma@gmail.com";
	$sujet="Formulaire de contact depuis faysalsanda.herokuapp.com";
	$entete='De : '.$email.'';
	$message='Nom : '.$nomprenoms.' '."\n".$email.' '."\n"."\n".'Message : '.$message;
	
	
	mail($destinataire, $sujet, $message, $entete);
	
	$result="Votre émail a été envoyé avec succès.";
	
	unset($_POST, $nomprenoms, $email, $message);
	//header('location: index.php');
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Faysal SANDA">

    <title>ALPHA ASSANE</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link href="assets/css/animate-custom.css" rel="stylesheet">


    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  	

  	<div id="navbar-main">
      <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon icon-shield" style="font-size:30px; color:#3498db;"></span>
          </button>
          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><span class="icon icon-shield" style="font-size:18px; color:#3498db;"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="#home" class="smoothScroll">Accueil</a></li>
			<li> <a href="#greywrap" class="smoothScroll"> A propos de moi</a></li>
			<li> <a href="#about" class="smoothScroll"> Mes services</a></li>
			<li> <a href="#contact" class="smoothScroll"> Contact</a></li>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>

  
		
		<!-- ==== SECTION DIVIDER2 -->
		<section class="section-divider textdivider" id="home" style="background-color: #327684; padding-bottom: 50px;">
			<div class="container">
				<h1 style="padding: 10px;">ALPHA ASSANE</h1>
				<hr>
				<p>Alpha, Spécialiste de Voyance et de guérisons.</p>
			</div><!-- container -->
		</section><!-- section -->

		<!-- ==== GREYWRAP ==== -->
		<div id="greywrap">
			<div class="container">
			<br>
				<div class="row">
					<div class="col-lg-4 centered">
						<img class="img-responsive" src="assets/img/alpha.jpg" align="">
					</div>
					<div class="col-lg-8" style="margin-top: 15px;">
						<h2 style="margin: 0px;">Que recherchez- vous ?</h2>
						<p>
						Savez- vous qu'il n’y a pas de vie sans problèmes et de problèmes sans solution ?

						Alpha Assane spécialiste de Voyance et de guérisons de toutes les maladies occultes apporte de solutions à tous vos problèmes de vie.
						12 ans d’expérience déjà pour ce grand homme modeste et désireux de concourir aux problèmes des uns et d’autres. De réputation internationale, ses dons surprenants concourent au succès de grandes personnalités à travers le monde.
						Alpha Assane, grand spiritualiste, vous propose des services à tout moment pour trouver une solution à vos problèmes.
						Il voit le passé, le présent et le futur d'une personne voulant un développement total dans ses affaires (travail, voyage) et ceux désireux de conquérir le cœur d’une femme.
						Il s'engage depuis des années à vous apporter son aide à distance ou sur place quelles que soient vos besoins.

						Mes pouvoirs occultes et mes connaissances issues des pratiques endogènes favorisent le résultat de mes interventions pour vous aider dans vos difficultés. Pour mes opérations je vous donne un délai pour l'obtention du résultat et ceux le plus vite possible. Le travail est précédé d’une consultation au préalable.

						<b>Que les bénédictions soient !!!!</b>
						</p>
					</div>	

				</div><!-- row -->
			</div>
			<br>
			<br>
		</div><!-- greywrap -->


		<!-- ==== ABOUT ==== -->

		<div class="container" id="about" name="about" style="margin-bottom: 15px;">
			<div class="row white">
				<h1 class="centered">SERVICES</h1>
				<hr>
				
				<div class="col-lg-12">
				<div class="product_price">
					<h4 class="price">Général
					</h4>

                     <div class="price-tax">
                     <p>
                     	Le constat de ces derniers temps est que les hôpitaux regorgent de malades, des hommes et des 
					femmes dont la santé (mentale ou physique) s’est détériorée et qui recherchent un moyen 
					efficace et rapide pour retrouver leur bonne humeur, leur entrain. Les médecins sont de plus en 
					plus débordés face au divers cas auxquels ils sont confrontés. Certains malades, et de plus en 
					plus nombreux, ne se fient plus seulement à la science médicale naturelle mais s’en vont 
					chercher d’autres techniques de guérison.

					C’est dans ce cadre que le Alpha Assane vous aide et accompagne dans tous vos problèmes 
					spirituels mentaux et physiques.

					La liste des services qu’il offre est exhaustive mais parmi ceux-ci on peut citer :
                     </p>

                     	<b>
						Les Maladies provoquées,

						Les Problèmes de couples,

						Contre Accident,

						Folie,

						Renforcer le sexe,

						Myopie,

						Pour avoir des clients,

						Savon d’estime,

						Pour maigrir,

						Pour engrosser facilement,

						Contre Crise cardiaque,

						Contre les sorciers,

						Pied fendillé,

						Etc.

						</b>

                     </div>
                </div>
				</div>

			</div><!-- row -->
		</div><!-- container -->
		


		<!-- ==== SECTION DIVIDER4 ==== 
		<section class="section-divider textdivider divider4">
			<div class="container">
				<h1>DESIGN CREATES EMOTIONAL CONNECTION</h1>
				<hr>
				<p>There’s more to design than meets the eye. It’s when it meets the heart that design creates a meaningful, lasting connection with the audience.</p>
			</div>
			</section>-->
		
	<div class="container" id="contact" name="contact">
			<div class="row">
			<br>
				<h1 class="centered">CONTACTEZ-MOI</h1>
				<hr>
				<br>
				<br>
				<div class="col-lg-4">
					<h3>Informations de contact</h3>
					<p><span class="icon icon-home"></span> Djougou, Bénin<br/>
						<span class="icon icon-phone"></span> +229 97119414, +229 67881144 <br/>
						<span class="icon icon-facebook"></span> <a href="#" target="_blank">Aplha Assane </a> <br/>
					</p>
				</div><!-- col -->
				
				<div class="col-lg-8">
					<h3>Formulaire de contact</h3>
					<p>
						<form class="form-horizontal" role="form" method="post" action="index.php">
						  <div class="form-group">
						    <label for="inputEmail1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-12">
						      <input type="text" class="form-control" name="nomprenoms" id="text1" placeholder="Nom et prénoms" required>
						    </div>
						  </div>
						  <div class="form-group">
						    <label for="text1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-12">
						      <input type="email"  class="form-control" name="email" id="text2" placeholder="Email" required>
						    </div>
						  </div>
						   <div class="form-group">
						    <label for="text1" class="col-lg-4 control-label"></label>
						    <div class="col-lg-12">
						      <textarea class="form-control" name="message" id="text3" placeholder="Message" required></textarea>
						    </div>
						  </div>
						  <div class="form-group">
						    <div class="col-lg-10">
						      <button type="submit" class="btn btn-success">Envoyer</button>
						    </div>
						  </div>
					   </form><!-- form -->
					</p>
				</div><!-- col -->
				
				

			</div><!-- row -->
		
		</div><!-- container -->


		<div id="footerwrap" style="padding: 18px;">
			<div class="container">
				<h4>Réalisé par  <strong>Faysal SANDA</strong> - Copyright 2017</h4>
			</div>
		</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		

	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/retina.js"></script>
	<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
	<script type="text/javascript" src="assets/js/jquery-func.js"></script>

	<!-- Regler probleme lorsqu'on clique dur Accueil -->
	<script type="text/javascript">

		// Message apres envoi formulaire de contact
		var result="<?php if(isset($result)){echo $result;} ?>";
		if(result!="")
		{
			alert('Merci de m’avoir contacté, je vous répondrai dès que possible.');
			// Changer l'url du navigateur
            window.history.pushState(document.title,document.title,"index.php");
		}

	</script>

  </body>
</html>
