<?php
namespace App\Views;

Class MovieCreateView extends View 
{
	public function render(){
		$page="movie.create";
		$title = " Add Movie";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/moviecreateform.inc.php";
	}
}