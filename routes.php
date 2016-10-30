<?php
  use Mailgun\Mailgun;

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
      // instantiate the SDK with your API credentials and define your domain. 
      $mg = new Mailgun("key-e57c285ca8eef10a12b8471981693f54");
      $domain = "sandbox3ad8315481024697926f05e7414bc72a.mailgun.org";

      // compose and send your message.
      $mg->sendMessage($domain, array(
        'from'    => 'Schlocktoberfest<mailgun@'.$domain .'>', 
        'to'      => "<". $moviesuggest['email'].">", 
        'subject' => 'Thanks for suggesting the movie ' . $moviesuggest['title'], 
        'text'    => 'Thanks for suggesting the movie '. $moviesuggest['title']. '. It would turn up in   the website soon!'));

      header("Location:./?page=moviesuggestsuccess");
      break;

    case 'moviesuggestsuccess':
     include "templates/moviesuggestsuccess.inc.php";
     break;

    default:
      echo "Error 404 ! Page not found !";
      break;
  }











