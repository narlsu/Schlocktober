<?php
namespace App\Controllers;

use App\Views\MoviesView;
use App\Models\MoviesModel;
use App\Views\FeaturedMovieView;

Class MoviesController
{
	public function showAll(){

		$movies = new MoviesModel();
		$moviesList = $movies->showAll();

		$view = new MoviesView(compact('moviesList'));
     	$view->render();
	}

	public function showFeaturedMovie(){
		
		$movie = new MoviesModel();
		$featuredmovie = $movie->find();

		$view = new FeaturedMovieView(compact('featuredmovie'));
		$view->render();
	}
}