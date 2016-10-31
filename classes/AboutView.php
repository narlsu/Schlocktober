<?php

Class AboutView {

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