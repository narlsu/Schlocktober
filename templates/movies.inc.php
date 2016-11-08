<div class="row">
<div class="col-xs-12">
  <h1>Schlocktoberfest <small>The Best Worst Movie Festival Ever !</small></h1>
  <h2>Movies</h2>

  <p>
  	<a href="./?page=movie.create" class="btn btn-default"><span class="glyphicon glyphicon-plus"></span> Add Movie</a>
  </p>
  <?php foreach($moviesList as $movie):?>
  		<li><a href="./?page=featuredmovie&amp;id=<?=$movie['id'];?>"><?= $movie['title']. ' ( ' . $movie['year'] .' ) ';?></a></li>
  <?php endforeach; ?> 
</div>
</div>



