<?php

Class HomeView {

	public $data;

	public function __construct($data){
		$this->data = $data;
	}

	public function render(){
		$page="home";
		$title = " Home";
		include "templates/master.inc.php";
	}

	public function content(){
		extract($this->data);
		include "templates/home.inc.php";
	}
}

?>