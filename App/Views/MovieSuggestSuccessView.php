<?php

namespace App\Views;

Class MovieSuggestSuccessView extends View 
{
	public function render(){
		$page="moviesuggestsuccess";
		$title = " Movie Suggest";
		include "templates/master.inc.php";
	}

	public function content(){
		include "templates/moviesuggestsuccess.inc.php";
	}
}

