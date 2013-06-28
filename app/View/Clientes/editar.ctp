<h1>Editar Cliente</h1>

<?php 
	foreach($cliente as $cli){

print_r($cli);

 echo $this->Session->flash(); 

	echo $this->Form->create('Clientes', array('action' => 'editar'));

echo '<input type="hidden" name="type" value="atualizar"/>';

echo '<input type="hidden" name="id" value="'.$cli['id'].'"/>';

echo $this->Form->input('nome_cliente', array('value' => $cli['nome_cliente']), array('placeholder' => 'Nome', 'required' ), array('label' => 'Nome')); 
echo $this->Form->input('razao_social', array('value' => $cli['razao_social']), array('placeholder' => 'Razão Social'), array('label' => 'Razão Social')); 
echo $this->Form->input('tipo_comercio', array('value' => $cli['tipo_comercio']), array('placeholder' => 'Tipo de Comércio'), array('label' => 'Tipo de Comércio')); 
echo $this->Form->input('dominio', array('value' => $cli['dominio']), array('placeholder' => 'Dominío'), array('label' => 'Dominío')); 


echo $this->Form->end(array(
	                                'label' => 'Salvar Cliente',
	                                'class' => 'btn '
	                            ));

}
	
?>