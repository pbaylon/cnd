<?php
App::uses('AppController', 'Controller');

class HomeController extends AppController {

	public function index() {
		$this->loadModel('Owner');

		// debug($this->Owner->getActivePetListByOwnerId(1));

		// debug(AuthComponent::user());

	}
}