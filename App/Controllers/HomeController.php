<?php

namespace App\Controllers;

use App\Views\HomeView;

Class HomeController
{
	public function show(){

	  $moviesuggest = $this->getMovieSuggestFormData();

      $view = new HomeView(compact('moviesuggest'));
      $view->render();
	}

	public function getMovieSuggestFormData(){

		if(isset($_SESSION['moviesuggest'])){
        	$moviesuggest = $_SESSION['moviesuggest'];
     	}else {
	        $moviesuggest= [
	                'title' => "",
	                'email' => "",
	                'checkbox' => "",
	                'errors' =>[
	                    'title' => "",
	                    'email' => "",
	                    'checkbox' => ""
	                  ]
	          ];
      } 
       return $moviesuggest;   
	}
}

