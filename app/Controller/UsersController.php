<?php

  class UsersController extends AppController {

    public $validate = array(
    'username' => array(
        'isUnique' => array(
            'rule' => 'isUnique',
            'message' => 'An account with this email address already exists.'
        )
    )
);


    public function beforeFilter() {
        parent::beforeFilter();
        //$this->Auth->allow('add'); // Letting users register themselves
    }

    public function logout(){
         $this->redirect($this->Auth->logout());
    }

    public function login() {


        $this->layout = 'login';
        if ($this->request->is('post')) {
              
             if ($this->Auth->login()) {
                //die('dieeeee shit');
                $this->redirect($this->Auth->redirect());
                //$this->set('usuariologged', $this->Auth->user());
            } else {
                $this->set('perm', "Usuario ou senha incorretos");
                $this->Session->setFlash('Falha no cadastro do cliente', 'default', array('class' => 'alert alert-error'));
            }
        }
    }


   } 


?>