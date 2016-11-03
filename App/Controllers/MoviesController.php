<?php
namespace App\Controllers;

use App\Views\MoviesView;
use App\Models\MoviesModel;

Class MoviesController
{
	public function show(){

		$movies = new MoviesModel();
		$movieList = $movies->showAll();

		$view = new MoviesView();
     	$view->render();
	}
}