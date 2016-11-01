<?php
require "classes/View.php";
Class AboutView extends View {

	public function render(){
		$page="about";
		$title = " About";
		include "templates/master.inc.php";
	}

	public function content(){
		include "templates/about.inc.php";
	}
}

?>