<?php
namespace App\Views;

Class FeaturedMovieView extends View 
{
	public function render(){
		$page="featuredmovie";
		$title = " Featured Movie";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/featuredmovie.inc.php";
	}
}