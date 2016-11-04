<div class="row">
	<div class="col-xs-12">
		<ol class="breadcrumb">
		  <li><a href="./">Home</a></li>
		  <li><a href="./?page=movies">Movies</a></li>
		  <li class="active"><?= $featuredmovie['title'];?></li>
		</ol>

	  <h1><?= $featuredmovie['title'];?></h1>
	  <small>Released in the year - <?= $featuredmovie['year']?></small>
	  <p><?= $featuredmovie['description']?></p>	  
	</div>
</div>