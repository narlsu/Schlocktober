<?php

  $page = ! isset($_GET['page']) ? "home" : $_GET['page'];

  switch ($page) {
    case 'home':
      include "templates/home.inc.php";
      break;
    case 'about':
      include "templates/about.inc.php";
      break;
    case 'moviesuggest':
      
      //moving form information into a moviesuggest variable 

      $moviesuggest = [];
      $expectedVariables =['title','email','checkbox'];

      foreach ($expectedVariables as $variable) {
        if(isset($_POST[$variable])){
          $moviesuggest[$variable] = $_POST[$variable];
        }else {
          $moviesuggest[$variable]="";
        }
      }
      //form validation

      $errors = false;

      if(strlen($moviesuggest['title']) === 0){
        $errors = true;
      }

      if (! filter_var($moviesuggest['email'], FILTER_VALIDATE_EMAIL)) {
        $errors = true;
      }

      if($errors === true){
        echo "Errors has to be fixed!";
        $_SESSION['moviesuggestError'] = "Errors";
      } else {
         echo "Successfully suggested a movie!";
         $_SESSION['moviesuggestError'] = "No Errors";
      }
      header("location:./");


      break;
    default:
      echo "Error 404 ! Page not found !";
      break;
  }











