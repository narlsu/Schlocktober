<?php
namespace App\Controllers;

use App\Views\RegisterView;

Class RegisterController
{
	public function show(){
		$view = new RegisterView();
     	$view->render();

	}
	public function store(){
		// Validate the form
		// Each field has been filled out
		$emailPattern = '/^[a-zA-Z0-9_\-.]{1,100}@[a-zA-Z0-9_\-.]{1,100}\.[a-zA-Z0-9.]{1,100}$/';

		if ( preg_match($emailPattern, $_POST['email'])) {
			// generate error message
			die('email good, check database');
		} else {
			// check database
			die('email is wrong');
		}

		
		// Email is not in use
		// Passwords match and are atleast 8 characters long

		// Hash the password (don't save in plain text)

		// Insert user into database

		// Log them in automatically (because we're nice)

		// Redirect to account page

	}
}