<?php
class ColaboradoresController extends AppController{


  function cadastrar(){
    if ($this->request->is('post')) {
                $data = $this->request->data;
                
                
        if($this->Colaboradore->save($data['Colaboradores'])){
          $this->Session->setFlash('Colaborador cadastrado com sucesso', 'default', array('class' => 'alert alert-success'));
        }else{
          $this->Session->setFlash('Falha no cadastro do Colaborador', 'default', array('class' => 'alert alert-error'));
        }

            $this->redirect(array('action' => 'consultar'));
      } else {

    }
  		
  }

  function editar($id = null){
  		        $this->Colaboradore->id_colaborador = $id;
        $this->set('colaborador', $this->Colaboradore->findById($id));  
        
        
        $data = $this->request->data;
        
        if($this->request->is('post')){
          $data['Colaboradore']['id'] = $data['id'];
          if($this->Cliente->save($data['Colaboradore'])){
                $this->Session->setFlash('Colaborador Atualizado com sucesso.', 'default', array('class' => 'alert alert-success'));
                 
          }else{
                $this->Session->setFlash('Erro ao atualizar Colaborador.', 'default', array('class' => 'alert alert-error'));
          }
          $this->redirect(array('action' => 'consultar'));
        }else{

        }

  }

  function excluir($id = null){
    if($this->Colaboradore->delete($id)){
    
      $this->Session->setFlash('Colaboradores excluido com sucesso', 'default', array('class' => 'alert alert-success'));



    }else{
      $this->Session->setFlash('Probelma na exclusão do Colaboradore', 'default', array('class' => 'alert alert-error'));
    
    }
    $this->redirect('/colaboradores/consultar');


  }


  function consultar(){
  		$this->set('colaboradores', $this->Colaboradore->find('all'));
  	
  }

}
?>