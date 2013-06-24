<?php
class ClientesController extends AppController{


  function cadastrar(){
  		if (empty($this->request->data)) {
        
      } else {
        $data = $this->request->data;
        $this->Cliente->save($data['Clientes']);

          
    }

  }

  function editar($id = null){
        
        $this->Cliente->id_cliente = $id;
        $this->set('cliente', $this->Cliente->findById($id));  

    //$data = array('nome_cliente' => 'My new title');
    //$this->Cliente->save($data);


  }

  function excluir($id = null){
    if($this->Cliente->delete($id)){
    
      $this->Session->setFlash('Cliente excluido com sucesso', 'default', array('class' => 'alert alert-success'));



    }else{
      $this->Session->setFlash('Probelma na exclusão do cliente', 'default', array('class' => 'alert alert-error'));
    
    }
    $this->redirect('/clientes/consultar');


  }


  function consultar(){
        $this->set('clientes', $this->Cliente->find('all'));
  }


}
?>