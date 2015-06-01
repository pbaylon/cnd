<?php
App::uses('AppController', 'Controller');

class PetsController extends AppController {

	public function index() {
		$this->set('pets', $this->Pet->getActivePetList());
	}

	public function add()
	{
		if($this->request->is('post'))
		{
			$this->autoRender = false;

			$data = $this->request->data;

			debug($data);

			$this->Pet->addPet($data);

		}
		else
		{
			$this->loadModel('Breed');
			$this->loadModel('Species');
			$this->set('breeds', $this->Breed->getBreedList());
			$this->set('species', $this->Species->getSpeciesList());
		}
	}

}