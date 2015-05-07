<?php
App::uses('AppModel', 'Model');
class Breed extends AppModel {

	// public $hasAndBelongsToMany  = array(
 //        'Owner' => array(
 //            'className' => 'Owner',
 //            'joinTable' => 'pet_owners',
 //            'foreignKey' => 'pet_id',
 //            'associationForeignKey' => 'owner_id',
 //            'with' => 'PetOwner',
 //            'conditions' => array('PetOwner.deleted' => 0)
 //        )
 //    );

	public function getBreedList()
	{
		$rdata = $this->find('list', array(
			'conditions' => array(
				'Breed.deleted' => 0
			)
		));

		return $rdata;
	}

}