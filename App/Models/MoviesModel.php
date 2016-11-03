<?php

namespace App\Models;

use PDO;

Class MoviesModel
{
	private $dbc;

	private function getDatabaseConnection(){

		$dsn = 'mysql:host=localhost;dbname=Schlocktoberfest;charset=utf8';
		$dbc = new PDO($dsn, 'root', '');

		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$dbc->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

		return $dbc;

	}

	public function showAll(){

		$db = self::getDatabaseConnection();

		$sql = "SELECT id, title, year, description FROM movies";

		$statement = $db->prepare($sql);

		$result = $statement->execute();

		// $record = $result->fetch(PDO::FETCH_ASSOC);

		var_dump($result);

	}

}























