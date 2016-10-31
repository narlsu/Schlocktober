<?php
use Mailgun\Mailgun;


Class SuggesterEmailView {

	public $data;

	public function __construct($data){
		$this->data = $data;
	}

	public function render(){
		extract($this->data);

		// instantiate the SDK with your API credentials and define your domain. 
	      $mg = new Mailgun("YOUR_API_KEY_FOR_MAILGUN");
	      $domain = "sandboxDOMAIN_NAME.mailgun.org";

      // compose and send your message.
	      $mg->sendMessage($domain, array(
	        'from'    => 'Schlocktoberfest<mailgun@'.$domain .'>', 
	        'to'      => "<". $moviesuggest['email'].">", 
	        'subject' => 'Thanks for suggesting the movie ' . $moviesuggest['title'], 
	        'text'    => 'Thanks for suggesting the movie '. $moviesuggest['title']. '. It would turn up in   the website soon!'));

	}
}

?>