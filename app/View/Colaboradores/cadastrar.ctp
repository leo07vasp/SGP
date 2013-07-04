<h1>Cadastro de Colaborador</h1>

<?php 
 echo $this->Session->flash(); 

	echo $this->Form->create('Colaboradores', array(
				'class' => 'form',
				'inputDefaults' => array(
			    'div' => 'control-group',
			    'label' => array('class' => 'control-label'),
			    'between' => '<div class="controls">',
			    'after' => '</div>',
			    
			    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
			) ));


echo $this->Form->input('nome',array('placeholder' => 'Nome', 'required' ), array('label' => 'Nome')); 
echo $this->Form->input('funcao', array('placeholder' => 'Função'), array('label' => 'Razão Social')); 
echo $this->Form->input('email',array('placeholder' => 'Email'), array('label' => 'Tipo de Comércio')); 


echo $this->Form->end(array('label' => 'Salvar Colaborador', 'class' => 'btn'));
?>