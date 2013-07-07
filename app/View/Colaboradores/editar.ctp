<h1>Editar Colaborador</h1>


<?php 
	foreach($colaborador as $colabo){



 echo $this->Session->flash(); 

echo $this->Form->create('Colaboradores', array('action' => 'editar'));

echo $this->Form->input('id', array('type'=>'hidden','value'=> ''.$colabo['id'].'', 'class' => 'colaborador-id')); 

echo $this->Form->input('nome', array('value' => $colabo['nome']), array('placeholder' => 'Nome', 'required' ), array('label' => 'Nome')); 
echo $this->Form->input('funcao', array('value' => $colabo['funcao']), array('placeholder' => 'Função'), array('label' => 'Função')); 
echo $this->Form->input('email', array('value' => $colabo['email']), array('placeholder' => 'Email'), array('label' => 'Email')); 


echo $this->Form->end(array(
	                                'label' => 'Salvar Colaborador',
	                                'class' => 'btn '
	                            ));

}
	
?>


