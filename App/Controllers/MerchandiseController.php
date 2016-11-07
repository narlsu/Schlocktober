<?php
namespace App\Controllers;

use App\Views\MerchandiseView;
use App\Models\MerchandiseModel;


Class MerchandiseController
{
	public function showAll(){

		$merchandise = new MerchandiseModel();
		$merchandiseList = $merchandise->showAll();

		$view = new MerchandiseView(compact('merchandiseList'));
     	$view->render();
	}

}