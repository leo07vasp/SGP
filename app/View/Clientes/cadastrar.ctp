<h1>Cadastro de Clientes</h1>

<?php 
 echo $this->Session->flash(); 

	echo $this->Form->create('Clientes', array(
				'class' => 'form',
				'inputDefaults' => array(
			    'div' => 'control-group',
			    'label' => array('class' => 'control-label'),
			    'between' => '<div class="controls">',
			    'after' => '</div>',
			    
			    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
			) ));


echo $this->Form->input('nome_cliente',array('placeholder' => 'Nome', 'required' ), array('label' => 'Nome')); 
echo $this->Form->input('razao_social', array('placeholder' => 'Razão Social'), array('label' => 'Razão Social')); 
echo $this->Form->input('tipo_comercio',array('placeholder' => 'Tipo de Comércio'), array('label' => 'Tipo de Comércio')); 
echo $this->Form->input('dominio', array('placeholder' => 'Dominío'), array('label' => 'Dominío')); 


echo $this->Form->end(array('label' => 'Salvar Cliente', 'class' => 'btn'));
?>