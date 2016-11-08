<?php

namespace App\Models;

use PDO;

abstract Class DatabaseModel
{
	private $dbc;

	public function __construct($input = null){
		if(is_array($input)){
			$this->processArray($input);
		}
	}

	public function processArray($input){
		foreach (static::$columns as $column) {
			if(isset($input[$column])){
				$this->$column = $input[$column];
			}
		}

	}

	private function getDatabaseConnection(){

		$dsn = 'mysql:host=localhost;dbname=Schlocktoberfest;charset=utf8';
		$dbc = new PDO($dsn, 'root', '');

		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$dbc->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

		return $dbc;

	}

	public function showAll(){

		$db = $this->getDatabaseConnection();

		$sql = "SELECT " . implode(',', static::$columns). " FROM " . static::$tablename;

		$statement = $db->prepare($sql);

		$result = $statement->execute();

		$moviesArray = [];

		while ($record = $statement->fetch(PDO::FETCH_ASSOC)){
			array_push($moviesArray, $record);
		}
		return $moviesArray;

	}

	public function find(){

		$id = isset($_GET['id']) ? $_GET['id'] : null;

		$db = $this->getDatabaseConnection();

		$sql = "SELECT ". implode(',', static::$columns). " FROM ". static::$tablename ." WHERE id=:id";

		$statement = $db->prepare($sql);

		$statement->bindValue(':id', $id);

		$result = $statement->execute();

		$record = $statement->fetch(PDO::FETCH_ASSOC);

		return $record;

	}
	public function save(){

		$db = $this->getDatabaseConnection();

		$columns = static::$columns;

		unset($columns[array_search('id', $columns)]);

		$sql = "INSERT INTO " . static::$tablename ." (" 
				. implode(',', $columns) . ") VALUES (";

		$insertcols = [];

		foreach ($columns as $column) {
			array_push($insertcols, ":".$column);
		}
		
		$sql .= implode(',', $insertcols) .	")";

		$statement = $db->prepare($sql);

		foreach ($columns as $column) {
			$statement->bindValue(":". $column, $this->$column);
		}
		
		$statement->execute();

		$this->id = $db->lastInsertId();

	}

}
















