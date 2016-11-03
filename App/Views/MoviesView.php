<?php
namespace App\Views;

Class MoviesView extends View 
{
	public function render(){
		$page="movies";
		$title = " Movies List";
		include "templates/master.inc.php";
	}

	public function content(){
		include "templates/movies.inc.php";
	}
}