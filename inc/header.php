<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
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
    if(isset($_GET['deco'])){
        session_destroy();
        header('location:index.php');
    }
	if(isset($_SESSION['id'])){
		?>
		<li class="nav-item">
		<a class="nav-link" href="profile.php">Profile</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="cours.php">Cours</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="header.php?deco">Déconnexion</a>
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