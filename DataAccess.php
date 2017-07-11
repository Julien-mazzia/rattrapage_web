<?php

class DataAcess(){
	public function saveMove($nom, $game, ISavable $game){
		$servername = "localhost:8889";
$username = "root";
$password = "20012001";

// Create connection
$conn = new mysqli($servername, $username, $password);
$result = $conn -> query('INSERT INTO move(nom, game) VALUES ('.$nom.', '.$game.') ');
	}
}


?>