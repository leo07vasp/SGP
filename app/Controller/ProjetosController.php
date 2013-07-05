<?php
class ProjetosController extends AppController{

 public $belongsTo = array('Clientes');

	public $uses = array(
        'Colaboradore',
        'Cliente',
        'Projeto'
    );


  function cadastrar(){


//$cidades = $this->paginate('Projeto', array('Projeto.id LIKE' => '1'));
//$cidades = $this->Projeto->find('all');
// $cidades = $this->Projeto->find('all', array(
//     'joins' => array(
//         array(
//             'table' => 'clientes',
//             'alias' => 'Cliente',
//             'type' => 'INNER',
//             'conditions' => array(
//                 'Cliente.id = Projeto.cliente_id'
//             )
//         )
//     ),
//     'fields' => array('Cliente.*', 'Projeto.*'),
//     'order' => 'Projeto.id DESC'
// ));


    $cidades = $this->Projeto->find('all', array(
      'joins' => array(
        array(
      'type' => 'inner', 
      'alias' => 'Cliente', 
      'table' => 'Clientes', 
      'conditions' => 'Projeto.cliente_id = Cliente.id' // Aqui seria o ON de um JOIN
    )),
         'fields' => array('Cliente.nome_cliente', 'Projeto.*'),
         'order' => 'Projeto.id DESC'
    ));

    // echo '<pre>';    
    // print_r($cidades);
    // echo '</pre>';
    // die;
  		$this->set('clientes', json_encode($this->Cliente->find('all',array('fields'=>array('id','nome_cliente')))));
  	    $this->set('colaboradores', json_encode($this->Colaboradore->find('all',array('fields'=>array('id','nome')))));
  	
  }

  function teste(){
		  $this->autoRender = false;
	  	return json_encode($this->Colaboradore->find('all',array('fields'=>array('id','nome'))));
	  	
  }

  function editar(){
  		

  }


  function consultar(){

  	 
  }

}
?>