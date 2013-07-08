<?php 

class MsgsController extends AppController{


public function mensagens(){

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

}


public function getmensagem($id = null){
     $this->autoRender = false;

      //echo $this->request->data['id'];
     
     return json_encode( $this->Msg->findById($this->request->data['id']));
}


}

 ?>