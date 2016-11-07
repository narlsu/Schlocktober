<?php
namespace App\Views;

Class MerchandiseView extends View 
{
	public function render(){
		$page="merchandise";
		$title = " Merchandise";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/merchandise.inc.php";
	}
}