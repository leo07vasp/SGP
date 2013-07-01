<?php
class ColaboradoresController extends AppController{


  function cadastrar(){

  		
  }

  function editar(){
  		

  }


  function consultar(){
  		$this->set('colaboradores', $this->Colaboradore->find('all'));
  	
  }

}
?>