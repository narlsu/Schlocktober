<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Schlocktoberfest</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Schlocktoberfest</a>
          </div>

         <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
              <li><a href="#">About</a></li>  
            </ul>      
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

      <div class="row">
        <div class="col-xs-12">
          <h1>Schlocktoberfest <small>The Best Worst Movie Festival Ever !</small></h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. </p>  
          <button type="button" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-film" aria-hidden="true"></span> Film Programme</button>
          <button type="button" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Book Tickets (Coming Soon !)</button>
        </div>
        <div class="col-sm-6">
          <img src="https://placekitten.com/700/400" class="img-responsive" alt="Kitten Image">
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <h3 class="text-center"> Best Worst Movie (2009) </h3>
          <p>This documentry reviews the making of film "Troll 2" from the perspective of its child artist, Michael.</p>
        </div>
        <div class="col-sm-4">
          <h3 class="text-center"> Movie Suggest </h3>
          <form class="form-horizontal" method="post" action="">
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
            </div>
            <div class="form-group">
              <label for="title" class="col-sm-2 control-label">Movie Title</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder="Troll 2">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Subscribe for Schlocktoberfest Newsletter<small> Once a month!</small>
                  </label>
                </div>
              </div>
            </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-primary">Suggest Movie</button>
            </div>
          </div>
        </form>
        </div>
        <div class="col-sm-4">
          <h3 class="text-center"> Our Sponsors </h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. </p>
        </div>
      </div>
      <hr>
      <footer>
        <p class="text-center">&copy;  Copyrights Reserved 2016 Schlocktoberfest Film Festival</p>
      </footer>
    </div> 

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>