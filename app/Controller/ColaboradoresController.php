<?php
class ColaboradoresController extends AppController{




  function cadastrar(){


         $this->loadModel('Permissoe');
         $this->loadModel('User');
         $this->set('permissoes', $this->Permissoe->find('list',array('fields'=>array('id','tipo'))));

   
    if ($this->request->is('post')) {

        $data = $this->request->data;
  
     
                if($data['Colaboradores']['isuser'] == 1){
                      
                      $this->User->save($data['user']);
                       $this->Session->setFlash('Colaborador cadastrado com sucesso como usuario também', 'default', array('class' => 'alert alert-success'));
     
                }

                
        if($this->Colaboradore->save($data['Colaboradores'])){
          $this->Session->setFlash('Colaborador cadastrado com sucesso', 'default', array('class' => 'alert alert-success'));
        }else{
          $this->Session->setFlash('Falha no cadastro do Colaborador', 'default', array('class' => 'alert alert-error'));
        }

            $this->redirect(array('action' => 'consultar'));
      } 
      
  }

  function verifica($cliente = null){

        $this->autoRender = false;
           $this->loadModel('User');
        
        $exists = $this->User->find('first', array(
         'conditions' => array('User.username' => $this->request->data['nome'])
          ));
        
        if($exists){
          echo 'false';
        }else{
          echo 'true';
        }
  }


  function editar($id = null){
              
        $this->set('colaborador', $this->Colaboradore->findById($id));  
        
        
        $data = $this->request->data;
        
        if($this->request->is('post')){
          
          if($this->Colaboradore->save($data['Colaboradores'])){
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