<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

public $components = array(
    'Session',
    'Auth' => array(
        'authenticate' => array(
            'Form' => array(
                'userModel' => 'User',
                'fields' => array(
                    'username' => 'username',
                    'password' => 'password'
                )
            )
        ),
        'loginRedirect' => array('controller' => 'home', 'action' => 'index'),
        'logoutRedirect' => array('controller' => 'home', 'action' => 'index'),
        'loginAction' => array('admin' => false, 'controller' => 'Users', 'action' => 'login')
    )
);

    public function beforeFilter(){
        Security::setHash('md5');
        
              //$this->Auth->allow('consultar', 'cadastrar');      


    }

    public function isAuthorized($user){
        if (isset($user['role'])) {
            return true;
        }

        return false;
    }
 

}
