<h1>Cadastro de Projeto</h1>

<?php 
//$parameter = 900;
//echo $this->requestAction('projetos/teste/'.$parameter); 
?>


<button class="teste">teste de ajax</button>

<pre id="ops">
	
</pre>


<script>
	
	jQuery(document).ready(function($) {
		jQuery('.teste').click(function(){
			jQuery.ajax({
				url: "<?php echo $this->Html->url('teste/'); ?>",
				success: function(data){
					jQuery('#ops').html(data);
				}
			});
		});
	});
</script>


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

echo $this->Form->input('cliente_id',array('name'=> 'cliente_id' ,'type'=>'hidden','value'=> '', 'class' => 'cliente-id')); 
echo $this->Form->input('clienteNome',array('autocomplete' => 'off', 'placeholder' => 'Nome Cliente', 'required', 'id' => 'clienteNome' ), array('label' => 'Nome do Cliente')); 



echo $this->Form->end(array('label' => 'Salvar Projeto', 'class' => 'btn'));

 ?>
 
 <script>
jQuery(document).ready(function($) {

var clientes = <?php echo $clientes?>;

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
		alert(map[item].id);
		return item;
    }
	});            

});



 </script>