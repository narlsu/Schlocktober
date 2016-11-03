<?php
namespace App\Views;

use Mailgun\Mailgun;

Class SuggesterEmailView extends View
{

	public function render(){
		extract($this->data);
		$this->sendEmail("templates/suggesteremail.inc.php");
	}

	public function sendEmail($templateFile){

		extract($this->data);

		// instantiate the SDK with your API credentials and define your domain. 
	      $mg = new Mailgun("YOUR_API_KEY");
	      $domain = "sandbox_DOMAIN.mailgun.org";

	      // open up a buffer to store details of template file.

	      ob_start();

	      include $templateFile;

	      $emailBody = ob_get_clean();

      	// compose and send your message.
	      $mg->sendMessage($domain, array(
	        'from'    =>  $emailHeader['from'],
	        'to'      =>  $emailHeader['to'],
	        'subject' =>  $emailHeader['subject'],
	        'text'    =>  $emailBody

	        ));

	}
}

