<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $uses = array('User');

	public $components = array('Auth','Cookie','Session');

	public function beforeFilter(){
        parent::beforeFilter();
		$this->Auth->allow('login','register');
	}

	public function index() {

        // aaa

	}

    public function login() {
        if($this->request->is('post')) {
            $user = $this->User->loginPAIX($this->request->data);
            if($this->Auth->login($user)) {
                return $this->redirect($this->Auth->redirectUrl());
            }
        }
        else {
            $this->layout = 'potoLogin';
            $this->set('msg', 'Not Post');
        }
    }

	public function logout(){
        $this->autoRender = false;
        if($this->Auth->logout()) {
            return $this->redirect($this->Auth->redirectUrl());
        }
	}

	public function register(){

		if($this->request->is('post')) {

            $rdata = $this->User->addUser($this->request->data);

            // debug($rdata);

        }
        else {
            $this->set('msg', 'Not Post');
        }

	}

}