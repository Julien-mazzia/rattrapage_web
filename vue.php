<?php

	r

	class TicTacToe{

		equire_once 'fenetre.php';
	require_once 'CotroleurDeJeu.php';
	require_once 'Partie.php';
	
		public function fenetreDeJeu(){
			
		}


		protected $fenetre = new Fenetre();
		protected $contoleur = new ControleurDeJeu();
		protected $partie = new Partie();


	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>morpion</title>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
	 <link rel="stylesheet" type="text/css" href="style.css">
	 <script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>
</head>
<body>
	<div class="row">
		<h3 class="col s2 offset-s8">Joueur 1</h3>
		<h3 class="col s2">Joueur 2</h3>
	</div>

	<div class="row">
		<form action="" method="POST" class="col s2 offset-s8">
			<input type="text">
			<input type="submit" value="Change P1">
		</form>

		<form action="" method="POST" class="col s2">
			<input type="text">
			<input type="submit" value="Change P2">
		</form>
	</div>

	<div class="row">
		<div class="col s3">
		<div class="row">
			<button onclick="create()">
				New Game
			</button>
		</div>

		<div class="row">
			<button onclick="create()">
				Replay Game
			</button>
		</div>
		</div>

		<div class="col s6 offset-s3" id="grid">
			
		</div>
		
	</div>

<script type="text/javascript">

	//ajoute la grille
	function create(){
		$('#grid').html('<div class="row"><div class="case col"></div><div class="case col"></div><div class="case col"></div></div><div class="row line"><div class="case col"></div><div class="case col"></div><div class="case col"></div></div><div class="row line"><div class="case col"></div><div class="case col"></div><div class="case col"></div></div>');
	}
</script>

</body>
</html>