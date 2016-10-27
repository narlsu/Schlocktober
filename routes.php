<?php

  $page = ! isset($_GET['page']) ? "home" : $_GET['page'];

  switch ($page) {
    case 'home':
      include "templates/home.inc.php";
      break;
    case 'about':
      include "templates/about.inc.php";
      break;
    default:
      echo "Error 404 ! Page not found !";
      break;
  }