<?php 

echo $this->Form->create('Clientes', array('class'=> 'form-horizontal'));

echo $this->Form->input('nome_cliente',array('placeholder' => 'Nome'), array('label' => 'Nome')); // has a label element
echo $this->Form->input('razao_social', array('label' => 'Razão Social')); // has a label element
echo $this->Form->input('tipo_comercio', array('label' => 'Tipo de Comércio')); // has a label element
echo $this->Form->input('dominio', array('label' => 'Dominío')); // has a label element

echo $this->Form->end('salvar'); 



?>
