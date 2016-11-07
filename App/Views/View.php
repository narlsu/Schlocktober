<?php

namespace App\Views;

abstract Class View {

	protected $data;

	public function __construct($data = []){
		$this->data = $data;
	}

	abstract public function render();

}
