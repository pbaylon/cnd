<?php
App::uses('AppModel', 'Model');
class Species extends AppModel {

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

	public function getSpeciesList()
	{
		$rdata = $this->find('list', array(
			'conditions' => array(
				'Species.deleted' => 0
			)
		));

		return $rdata;
	}

}