<!DOCTYPE html>
<html>
 <head>
	<meta charset="utf-8" />
	<title>E-sport Rainbow SIX&reg; Siege</title>
	<link rel="stylesheet" type="text/css" href="SiteR6.css" />
	<link rel="shortcut icon" href="Ressources/Images/r6s-favicon_196284.ico" />
 </head>
 <header>
	<h1 id='titre_universel'>E-Sport Rainbow 6<sup>&reg;</sup> Siege</h1>
 </header>
 <body class='body_contact'>
	<a href='index.html'><img src='Ressources/Images/logo1.png' alt='logo Rainbow Six Siege' id='logo' /></a>
 <!--Menu-->
 	<nav>
		<div id='menu'>
			<ul>
				<li class='menu_gauche'><a href="index.html" id='liens'>Accueil</a></li>
				<li class='menu_gauche'><a href="Jeu.html" id='liens'>Jeu</a></li>
				<li class='menu_gauche'><a href="Equipes.html" id='liens'>Equipes</a></li>
				<li class='menu_gauche'><a href="Championnat.html" id='liens'>Championnat</a></li>
				<li class='menu_gauche'><a href="Galerie.html" id='liens'>Galerie Photo</a></li>
				<li class='menu_gauche'><a href="Contact.php" id='liens'>Contact</a></li>
			</ul>
		</div>
	</nav>
 <!--Fin Menu-->
 
 <!--Texte principal-->
	<div id='b1'>
		<h2>Contact</h2>
		<img src='Ressources/Images/photo_agents/gadgets/gadget-mute.png' alt='Brouilleur de communications' class='img_contact'/>
		<h3>Formulaire de contact:</h3>
		<form  action='' method="post">
			Nom:
			<br/>
			<input type="text" name="pseudo_exp" placeholder="Ex : Janneau" size='40' required />
			<br/>
			<br/>
			Email:
			<br/>
			<input type="email" name="email_exp" placeholder="Ex : leo@janneau.com" size='60' required />
			<br/>
			<br/>
			Objet:
			<br/>
			<input type="text" name="objet" placeholder="Ex : Site R6" size="40" required />
			<br/>
			<br/>
			Message:
			<br/>
			<textarea name="message" id="message" rows='10' cols='60' required></textarea>
			<br/>
			<br/>
			<input type="submit" value="Envoyer" />
		</form>
		<?php
			if (isset($_POST)&& !empty($_POST['pseudo_exp']) &&!empty($_POST['objet'])
			&& !empty($_POST['message']) && $_POST['message']!="Veuillez vérifier régulièrement les nouvelles disponibilités."){
				
				extract($_POST);
				$destinataire ='nadal.paul@gmail.com';
				$expediteur =$pseudo_exp.' <'.$email_exp.'>';
				$mail= mail($destinataire,$objet,$message,
				$expediteur .'esport.fansite.r6.free.fr');
				if($mail)echo'Email envoyé avec succès!';else echo'Echec Envoi!';
			}else echo'Formulaire non soumis';
		?>	
		<br/>
		<br/>
		<ul id='tab_contact'>
			<li id='t1'><u>Webmasters:</u></li>
			<br/>
			<li id='noms'>Donatien Philippo <a href='http://steamcommunity.com/id/2421284' target='_blank'><img src='Ressources\Images\logo_steam.png' alt='steam' id='steam'></a></li>
			<li id='noms'>Julien Marzal-Hilaire <a href='http://steamcommunity.com/id/jujumh' target='_blank'><img src='Ressources\Images\logo_steam.png' alt='steam' id='steam'></a></li>
			<li id='noms'>Paul Nadal <a href='http://steamcommunity.com/id/p0lo92/' target='_blank'><img src='Ressources\Images\logo_steam.png' alt='steam' id='steam'></a></li>
		</ul>
		<p id='start_contact'>
			<u>Contact:</u>
		</p>
		<p id='start_contact'>
			N'h&eacute;sitez pas &agrave; nous donner votre opinion sur ce site car notre r&ocirc;le est de rendre votre visite la plus agr&eacute;able et simple possible.
		</p>
		<a href="mailto:jpd.r617@gmail.com" id='mail'><div id='contact0'><div id='contact'><img src='Ressources/Images/mail.png' alt='mail' id='logo_mail'>Envoyez-nous un e-mail !</a></div></div>
	<br/>
	<br/>
		<ul id='tab_contact'>
			<li id='t1'><u>Liens:</u></li>
			<br/>
			<li id='t1'><a href="https://rainbow6.ubisoft.com/siege/fr-fr/home/" id='mail' target='_blank'>Site officiel: Tom Clancy's Rainbow Six<sup>&reg;</sup> Siege &#124; Ubisoft<sup>&reg;</sup></a></li>
			<li id='t1'>
				Achetez le Jeu!
				<a href="http://store.steampowered.com/app/359550/Tom_Clancys_Rainbow_Six_Siege/" id='mail' target='_blank'><img src='Ressources\Images\logo_steam.png' alt='steam' id='steam'></a>
				<a href="http://store.ubi.com/fr/rainbow-six-siege.html?isIntRed=true" id='mail' target='_blank'><img src='Ressources\Images\logo_uplay.png' alt='uplay' id='steam'></a>
			</li>
			<li id='t1'><a href="https://www.youtube.com/channel/UCWKHac5bjhsUtSnMDFCT-7A" id='mail' target='_blank'>Rainbow Six<sup>&reg;</sup> Siege Pro League Youtube<img src='Ressources\Images\yt_icon.jpg' alt='youtube' id='yt'></a></li>
			<li id='t1'><a href="https://didrit.fr" id='mail' target='_blank'>Site de notre professeur M.Didrit</a></li>
		</ul>	
		<a href='Ressources\Fichiers\whitenoise.jpg' download='White_Noise' id = 'liens'>Télécharger l'image de White Noise en cliquant ici:
			<img src='Ressources\Images\telecharger.png' id='tel'>
		</a>
		
		
	</div>

  <!--Fin Texte principal-->
  
  
 <footer>
	<ul id='foot_table'>
		<li><a href="index.php" id='liens'><u>Accueil</u></a></li>
		<li><a href="Jeu.html" id='liens'><u>Jeu</u></a></li>
		<li><a href="Equipes.html" id='liens'><u>Equipes</u></a></li>
		<li><a href="Championnat.html" id='liens'><u>Championnat</u></a></li>
		<li><a href="Galerie.html" id='liens'><u>Galerie Photo</u></a></li>
		<li><a href="Contact.php" id='liens'><u>Contact</u></a></li>
	</ul>	
 </footer>
</html>