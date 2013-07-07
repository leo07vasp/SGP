<?php
class ProjetosController extends AppController{

  function cadastrar(){
    
        $this->loadModel('Colaboradore');
        $this->loadModel('Cliente');

        $this->set('clientes', json_encode($this->Cliente->find('all',array('fields'=>array('id','nome_cliente')))));
        $this->set('colaboradores', json_encode($this->Colaboradore->find('all',array('fields'=>array('id','nome')))));

        if ($this->request->is('post')) {
          $data = $this->request->data;

          $data['Projetos']['data_inicio'] = $this->dataFormat($data['Projetos']['data_inicio']);

           if($this->Projeto->save($data['Projetos'])){

           }else{

           }

        }


    // $cidades = $this->Projeto->find('all', array(
    //   'joins' => array(
    //     array(
    //   'type' => 'inner', 
    //   'alias' => 'Cliente', 
    //   'table' => 'Clientes', 
    //   'conditions' => 'Projeto.cliente_id = Cliente.id' // Aqui seria o ON de um JOIN
    // )),
    //      'fields' => array('Cliente.nome_cliente', 'Projeto.*'),
    //      'order' => 'Projeto.id DESC'
    // ));


  		
  	
  }

  function teste(){
          $this->loadModel('Colaboradore');
         $this->loadModel('Cliente');
		  $this->autoRender = false;
	  	return json_encode($this->Colaboradore->find('all',array('fields'=>array('id','nome'))));
	  	
  }

  function dataFormat($data) {
    return implode("-",array_reverse(explode("/",$data)));
       
  }


  function editar(){
  		

  }


  function consultar(){

  	 
  }

}
?>