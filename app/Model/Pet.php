<?php
App::uses('AppModel', 'Model');
class Pet extends AppModel {

	public $hasAndBelongsToMany  = array(
        'Owner' => array(
            'className' => 'Owner',
            'joinTable' => 'pet_owners',
            'foreignKey' => 'pet_id',
            'associationForeignKey' => 'owner_id',
            'with' => 'PetOwner',
            'conditions' => array('PetOwner.deleted' => 0)
        )
    );

    public function addPet($data)
    {
    	$pdata['Pet']['name'] = $data['name'];
    	$pdata['Pet']['species_id'] = $data['species'];
        $pdata['Pet']['breed_id'] = $data['breed'];
        $pdata['Pet']['sex'] = $data['sex'];
        $pdata['Pet']['dob'] = date('Y-m-d', strtotime($data['dob']));

    	if($this->save($pdata)) {
    		return true;
    	}

    	return false;
    }

	public function getActivePetList()
	{
		// $this->unbindModel(
		// 	array(
		// 		'hasAndBelongsToMany' => array('Owner')
		// 	)
		// );

		$rdata = $this->find('all', array(
			'conditions' => array(
				'Pet.deleted' => 0
			)
		));

		return $rdata;
	}

}