<?php
namespace App\Controllers;

use App\Views\MoviesView;
use App\Models\MoviesModel;
use App\Views\FeaturedMovieView;
use App\Views\MovieCreateView;

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
	public function create(){

		$view = new MovieCreateView();
		$view->render();

	}
	public function store(){
		
		$movie = new MoviesModel($_POST);
		$movie->save();	
		header("Location:./?page=featuredmovie&id=". $movie->id);

	}
}















