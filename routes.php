<?php

namespace App\Controllers;
  
  $page = ! isset($_GET['page']) ? "home" : $_GET['page'];

  switch ($page) {
    
    case 'home':

      $controller = new HomeController();
      $controller->show();
      break;
    
    case 'about':
      
      $controller = new AboutController();
      $controller->show();
      break;

    case 'movies':

      $controller = new MoviesController();
      $controller->showAll();
      break;

    case 'featuredmovie':

      $controller = new MoviesController();
      $controller->showFeaturedMovie();
      break;

    case 'movie.create':

      $controller = new MoviesController();
      $controller->create();
      break;

    case 'movie.store':

      $controller = new MoviesController();
      $controller->store();
      break;
    
    case 'moviesuggest':

      $controller = new MovieSuggestController();
      $controller->show();      
      break;

    case 'moviesuggestsuccess':
     
     $controller = new MovieSuggestController();
     $controller->generateSuccessPage();
     break;

    case 'merchandise':

      $controller = new MerchandiseController();
      $controller->showAll();
      break;

    default:
      echo "Error 404 ! Page not found !";
      break;
  }











