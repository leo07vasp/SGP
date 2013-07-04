<?php
class ProjetosController extends AppController{

	public $uses = array(
        'Colaboradore',
        'Cliente'
    );


  function cadastrar(){


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