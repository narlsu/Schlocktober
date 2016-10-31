<?php

$emailHeader = [
	'from' 		=> 'Schlocktoberfest<mailgun@'.$domain .'>',
	'to'		=> "<". $moviesuggest['email'].">", 
	'subject'	=> 'Thanks for suggesting the movie ' . $moviesuggest['title'], 

];


?>


Hi there,

Thank you for your kind suggestion that we show <?php echo $moviesuggest['title'];?> at Schlocktoberfest.

<?php if($moviesuggest['checkbox']):?>
	 Thank you for subscribing for our Newsletter. 
	You will receive your copy within a fortnight. 
<?php endif; ?>

Thanks.


The Schlocktoberfest Team
