<?php
  
  $page = ! isset($_GET['page']) ? "home" : $_GET['page'];

  switch ($page) {
    
    case 'home':

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
      
      require "classes/HomeView.php";
      $view = new HomeView(compact('moviesuggest'));
      $view->render();
      break;
    
    case 'about':
      require "classes/AboutView.php";
      $view = new AboutView();
      $view->render();

      break;
    
    case 'moviesuggest':

      $_SESSION['moviesuggest']= null;
      
      //moving form information into a moviesuggest variable 

      $moviesuggest = [
                        'errors'=>[]
                      ];
      $expectedVariables =['title','email','checkbox'];

      foreach ($expectedVariables as $variable) {

        // creating entries for error field
        $moviesuggest['errors'][$variable]="";

        // move all $_POST values into MovieSuggest array
        if(isset($_POST[$variable])){
          $moviesuggest[$variable] = $_POST[$variable];
        }else {
          $moviesuggest[$variable]="";
        }
      }

      //form validation

      $errors = false;

      if(strlen($moviesuggest['title']) === 0){
        $moviesuggest['errors']['title']="Enter a title.";
        $errors = true;
      }

      if (! filter_var($moviesuggest['email'], FILTER_VALIDATE_EMAIL)) {
        $moviesuggest['errors']['email']="Enter a valid email.";
        $errors = true;
      }

      if($errors === true){
        
        $_SESSION['moviesuggestError'] = true;
        $_SESSION['moviesuggest']= $moviesuggest;
        header("location:./");
      } 

      require "classes/SuggesterEmailView.php";
      $view = new SuggesterEmailView(compact('moviesuggest'));
      $view->render();

      header("Location:./?page=moviesuggestsuccess");
      break;

    case 'moviesuggestsuccess':
     
     require "classes/MovieSuggestSuccessView.php";
     $view = new MovieSuggestSuccessView();
     $view->render();
     break;

    default:
      echo "Error 404 ! Page not found !";
      break;
  }











