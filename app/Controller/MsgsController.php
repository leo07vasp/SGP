<?php 

class MsgsController extends AppController{


public function mensagens(){



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
        'Msg.para' => 5
   		 )
		
	));


    $this->set('mensagens', $mensagens);	

}


}

 ?>