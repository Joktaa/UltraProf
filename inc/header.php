<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- BARRE DE NAVIGATION -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">UltraProf</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
				</li>
	<?php
	if(isset($_SESSION['id'])){
		?>
		<li class="nav-item">
			<a class="nav-link" href="mon_profile.php">Profile</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="cours.php">Cours</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="CUcours.php">Créer un cours</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="index.php?deco">Déconnexion</a>
		</li>
	<?php
	}
	if(!isset($_SESSION['id'])){
		?>
		<li class="nav-item">
			<a class="nav-link" href="log.php">Se connecter / S'inscrire</a>
		</li>
		<?php
	}
	?>
			</ul>
		</div>
	</nav>