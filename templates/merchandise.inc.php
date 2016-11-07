<div class="row">
<div class="col-xs-12">
  <h1>Schlocktoberfest <small>The Best Worst Movie Festival Ever !</small></h1>
  <h2>Merchandise</h2>
  <?php foreach($merchandiseList as $merchandise):?>
  		<h3><?= $merchandise['name'];?><i><?=' - '. $merchandise['price'] ;?></i></h3>
  		<p><?= $merchandise['description'];?></p>
  <?php endforeach; ?> 
</div>
</div>