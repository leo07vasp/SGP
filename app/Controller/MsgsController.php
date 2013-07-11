<?php 

class MsgsController extends AppController{


public function mensagens(){

    $this->loadModel('User');
	$connectedUser =  $this->Session->read('Auth.User.id');

	$mensagens = $this->Msg->find('all', 
	array('joins' => array(
    array(
        'table' => 'users',
        'alias' => 'de',
        'type' => 'inner',
        'foreignKey' => false,
        'conditions'=> array('de.id = Msg.de')
    ),
    array(
        'table' => 'users',
        'alias' => 'para',
        'type' => 'inner',
        'foreignKey' => false,
        'conditions'=> array('para.id = Msg.para',
        )
    )
),
		'fields' => array('para.username', 'Msg.*', 'de.username'),
		'conditions' => array(
        'Msg.para' => $connectedUser
   		 )
		
	));


    $this->set('mensagens', $mensagens);    
    
    $this->set('users', $this->User->find('list',array('fields'=>array('id','username'))));

}


public function getmensagem($id = null){
     $this->autoRender = false;
	 return json_encode($this->Msg->findById($this->request->data['id']));
}

public function sendMsg(){
 

       if ($this->request->is('post')) {

             $data = $this->request->data;
    
            if($this->Msg->save($data['Msgs'])){
               $this->Session->setFlash('Mensagem Enviada com sucesso', 'default', array('class' => 'alert alert-success'));
            }else{
               $this->Session->setFlash('Falha no Envio', 'default', array('class' => 'alert alert-error')); 
            }
        
        }

         $this->redirect(array('action' => 'mensagens'));

        

     //$this->request->data['Post']['created'] = DboSource::expression('NOW()');
}

public function markread($id = null){
     $this->autoRender = false;   
     
}


public function countUnreadmsg(){
    $connectedUser =  $this->Session->read('Auth.User.id');
    $mensagens = $this->Msg->find('all', 
    array('joins' => array(
    array(
        'table' => 'users',
        'alias' => 'de',
        'type' => 'inner',
        'foreignKey' => false,
        'conditions'=> array('de.id = Msg.de')
    ),
    array(
        'table' => 'users',
        'alias' => 'para',
        'type' => 'inner',
        'foreignKey' => false,
        'conditions'=> array('para.id = Msg.para',
        )
    )
),
        'fields' => array('para.username', 'Msg.*', 'de.username'),
        'conditions' => array(
        'Msg.para' => $connectedUser, 'Msg.status' => 0
         )
        
    ));
    return count($mensagens);
    

    
}



}

 ?>