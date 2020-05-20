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
if(isset($_SESSION['id'])){
	?>
	<li class="nav-item">
	<a class="nav-link" href="profile.php">Profile</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="cours.php">Cours</a>
	</li>
<?php
}
if(!isset($_SESSION['id'])){
	?>
	<li class="nav-item">
	<a class="nav-link" href="register.php">S'inscrire</a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="login.php">Se connecter</a>
	</li>
	<?php
}
?>
</ul>
</div>
</nav>