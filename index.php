<?php
	$pageTitle = "Le Portfolio de Safia";
	$titre = "Développement Web & Mobile";
	$logoSG = "img/SG.png";
	$nom = "SafiaGOBET";
	$titre1 = "Développeuse Full Stack";
	$parcours = "Mon Parcours";
	$competences = "Mes compétences";
	$contact = "Contactez-moi";
	$firstImg = "img/safia.png";
	$headerMenu = [
		[
			"content" => "Accueil" ,
			"link" => "#first_screen",
		],
		[
			"content" => "Parcours" ,
			"link" => "#second_screen",
		],
		[
			"content" => "Compétences" ,
			"link" => "#third_screen",
		],
		[
			"content" => "Portfolio" ,
			"link" => "#first_screen",
		],
		[
			"content" => "Contact" ,
			"link" => "#four_screen",
		],
	];
 ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" />
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<script src="https://cdn.jsdelivr.net/jquery/1.11.1/jquery.min.js"></script>
		<script src="http://timeline.albertino.eti.br/jquery-albe-timeline-2.0.1.min.js"></script>

		<script src="script.js"></script>
		<title><?php echo $pageTitle ?></title>
	</head>
	<body>
		<header>



			<img src="<?php echo $logoSG ?>" height="50px" width="120px">
			<ul id="list_parent">
				<?php
				foreach ($headerMenu as $value) {
					echo '<li><a href="' . $value["link"] . '">' .$value["content"] .'</a></li>';
				}
				 ?>
			</ul>
		</header>
		<main>
		<section id="profile">
			<div id="first_screen">
				<div class="titre">
						<?php echo $titre ?> <br>
						<span><?php echo $nom; ?></span>
						<?php echo $titre1 ?>
				</div>
				<div class="picture">
					<img src="<?php echo $firstImg ?>" height="200px" width="200px">
				</div>
				<div class="fleche">
				<div class="fleche_bas"></div>
				</div>
			</div>
		</section>

		<section id="timeline">
		<div id="second_screen">
			<div id="myTimeline">
				<h3><?php echo $parcours ?></h3>
			</div>
		</div>
		</section>

		<div id="third_screen">
			<h1><?php echo $competences ?></h1>
		</div>

		<div id="four_screen">
			<h1><?php echo $contact ?></h1>
			<div class="contactMe">
				<form class="" action="index.html" method="post">
				<div class="droite">
					<input type="text" id="input-name" placeholder="Qui êtes-vous ?">
					<input type="email" id="input-email" placeholder="Quel est votre mail ?">
					<input type="sujet" id="input-sujet" placeholder="Sujet">
				</div>
				<div class="gauche">
					<textarea name="message" type="text" id="input-message" placeholder="Tapez ici votre message"></textarea>
				</div>
				<input type="submit" value="Envoyer" id="input-submit">
			</form>
			</div>
		</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d89077.16417711615!2d4.765081195653894!3d45.757934102910916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea516ae88797%3A0x408ab2ae4bb21f0!2sLyon!5e0!3m2!1sfr!2sfr!4v1494515910147" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</main>
		<footer>
			<p>Site réalisé par Safia en 2017</p>
		</footer>
	</body>
</html>
