<?php
App::uses('AppModel', 'Model');
class Owner extends AppModel {

	public $hasAndBelongsToMany  = array(
        'Pet' => array(
            'className' => 'Pet',
            'joinTable' => 'pet_owners',
            'foreignKey' => 'owner_id',
            'associationForeignKey' => 'pet_id',
            'with' => 'PetOwner',
            'conditions' => array('PetOwner.deleted' => 0)
        ),
        'ActivePet' => array(
            'className' => 'Pet',
            'joinTable' => 'pet_owners',
            'foreignKey' => 'owner_id',
            'associationForeignKey' => 'pet_id',
            'with' => 'PetOwner',
            'conditions' => array('PetOwner.deleted' => 0, 'ActivePet.deleted' => 0)
        )
    );

	public function getPetListByOwnerId($ownerId)
	{
		$this->unbindModel(
			array(
				'hasAndBelongsToMany' => array('ActivePet')
			)
		);

		$rdata = $this->find('all', array(
			'conditions' => array(
				'Owner.id' => $ownerId
			)
		));

		return $rdata;
	}

	public function getActivePetListByOwnerId($ownerId)
	{
		$this->unbindModel(
			array(
				'hasAndBelongsToMany' => array('Pet')
			)
		);

		$rdata = $this->find('all', array(
			'conditions' => array(
				'Owner.id' => $ownerId
			)
		));

		return $rdata;
	}

}