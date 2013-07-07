<h1>Cadastro de Projeto</h1>

<?php 
//$parameter = 900;
//echo $this->requestAction('projetos/teste/'.$parameter); 
?>


<?php 
	
	 echo $this->Session->flash(); 

	echo $this->Form->create('Projetos', array(
				'class' => 'form',
				'inputDefaults' => array(
			    'div' => 'control-group',
			    'label' => array('class' => 'control-label'),
			    'between' => '<div class="controls">',
			    'after' => '</div>',
			    
			    'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
			) ));


echo $this->Form->input('nome_projeto',array('autocomplete' => 'off', 'placeholder' => 'Nome Projeto', 'required', 'id' => 'nomeProjeto' ), array('label' => 'Nome Do Projeto')); 

echo $this->Form->input('cliente_id',array('type'=>'hidden','value'=> '', 'class' => 'cliente-id')); 
echo $this->Form->input('clienteNome',array('autocomplete' => 'off', 'placeholder' => 'Nome Cliente', 'required', 'id' => 'clienteNome' ), array('label' => 'Nome do Cliente')); 

echo $this->Form->input('colaboradore_id',array('type'=>'hidden','value'=> '', 'class' => 'colaborador-id')); 
echo $this->Form->input('colaboradorNome',array('autocomplete' => 'off', 'placeholder' => 'Nome do Colaborador', 'required', 'id' => 'colaboradorNome' ), array('label' => 'Nome do Cliente')); 

echo $this->Form->input('data_inicio',array('autocomplete' => 'off', 'placeholder' => 'Data de Inicio', 'required', 'id' => 'data-inicio' ), array('label' => 'Data de Inicio')); 




echo $this->Form->end(array('label' => 'Salvar Projeto', 'class' => 'btn'));

 ?>
 
 <script>
jQuery(document).ready(function($) {


jQuery('input#data-inicio').datepicker({
    format: "dd/mm/yyyy",
    language: "pt-BR"
});


var clientes = <?php echo $clientes?>;
var colaboradores = <?php echo $colaboradores?>;

//console.log(clientes);
//console.log(colaboradores);

jQuery('#colaboradorNome').typeahead({
	source: function(query, process) {
		objects = [];
		map = {};
		var data = colaboradores // Or get your JSON dynamically and load it into this variable
		jQuery.each(data, function(i, object) {
			map[object.Colaboradore.nome] = object.Colaboradore;
		    objects.push(object.Colaboradore.nome);
		});
		process(objects);
	},
    updater: function(item) {
		jQuery('.colaborador-id').val(map[item].id);
		return item;
    }
	});   


jQuery('#clienteNome').typeahead({
	source: function(query, process) {
		objects = [];
		map = {};
		var data = clientes // Or get your JSON dynamically and load it into this variable
		jQuery.each(data, function(i, object) {
			map[object.Cliente.nome_cliente] = object.Cliente;
		    objects.push(object.Cliente.nome_cliente);
		});
		process(objects);
	},
    updater: function(item) {
		//$('hiddenInputElement').val(map[item].id);
		jQuery('.cliente-id').val(map[item].id);
		return item;
    }
	});            




});



 </script>