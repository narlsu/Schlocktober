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
      $controller->show();
      break;
    
    case 'moviesuggest':

      $controller = new MovieSuggestController();
      $controller->show();      
      break;

    case 'moviesuggestsuccess':
     
     $controller = new MovieSuggestController();
     $controller->generateSuccessPage();
     break;

    default:
      echo "Error 404 ! Page not found !";
      break;
  }











