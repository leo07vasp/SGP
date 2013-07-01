<?php
class ProjetosController extends AppController{


  function cadastrar(){

  		  $this->set('projetos', $this->Cliente->find('all'));
  }

  function editar(){
  		

  }


  function consultar(){

  	
  }

}
?>