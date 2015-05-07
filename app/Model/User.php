<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

    public $useTable = 'Users';

    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )
    );

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $passwordHasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }

    function loginPAIX($data) {
        if (isset($data['password'])) {
            $hasher = new SimplePasswordHasher(array('hashType' => 'sha256'));
            $hashedPass = $hasher->hash($data['password']);
        }
        else {
            return false;
        }

    	$conditions = array('User.username' => $data['username'], 'User.password' => $hashedPass);
    	$fdata = $this->find('first', array('conditions' => $conditions));

    	return $fdata;
    }

    function addUser($data) {

    	$pdata['User']['username'] = $data['username'];
    	$pdata['User']['password'] = $data['password'];
        $pdata['User']['name'] = $data['name'];
    	// $pdata['User']['email'] = $data['email'];
    	// $pdata['User']['phone'] = $data['phone'];
    	// $pdata['User']['role'] = 'M';

    	if($this->save($pdata)) {
    		return true;
    	}

    	return false;
    }

}