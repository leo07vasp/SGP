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

echo $this->Form->label('isuser', 'Criar Usuário', 'label-isuser no-margin');
echo $this->Form->input('isuser', array('label' => false, 'type' => 'checkbox', 'class' => 'isuser', 'checked' => false)); 

echo '<div class="control-user">';

echo $this->Form->input('usuario',array('placeholder' => 'Usuário', 'name' => 'data[user][username]'), array('label' => 'Usuário para login')); 
echo $this->Form->input('senha',array('placeholder' => 'Senha', 'type' => 'password', 'name' => 'data[user][password]'), array('label' => 'Senha')); 


  echo $this->Form->input('permissoes_id', array("name"=>'data[user][permissoes_id]'), array(
      										'options' => $permissoes,
      										'empty' => 'Selecione a permissão',
                          					'label' => 'Tipo'
      									));
echo '</div>';

echo $this->Form->end(array('label' => 'Salvar Colaborador', 'class' => 'btn salvar-colaborador'));
?>


<style>
	.no-margin{margin-bottom: 0px}
	.label-isuser{position: absolute; margin-left: 25px; margin-top: 4px;}
	.control-user{display:none;}
</style>


<script>
	jQuery(document).ready(function($) {

		jQuery('#ColaboradoresUsuario').tooltip({
			html : true,
			text: 'teste',
			placement: 'right',
			trigger: 'focus'

		});
		

		jQuery('.isuser').on('change', function(){
			if(jQuery(this).is(':checked')){
				jQuery('.control-user').show();
			}else{
				jQuery('.control-user').hide();
				jQuery('.salvar-colaborador').removeAttr('disabled');
			}
		});


		jQuery('#ColaboradoresUsuario').on('focusout', function(){
			elem = jQuery(this);
			jQuery.ajax({
				dataType: "html",
         	    type: "POST",
            	evalScripts: true,
            	url: '<?php echo Router::url(array('controller'=>'colaboradores','action'=>'verifica'));?>',
            	data: ({nome:jQuery(this).val()}),
            	beforeSend: function(){
            		jQuery('.salvar-colaborador').attr('disabled', 'disabled');
            		
            	},

				success: function(data){
					if(data == 'false'){
						console.log(jQuery(this).closest('.control-group'));
						jQuery(elem).closest('.control-group').addClass('error');
						jQuery(elem).after('<span class="help-inline">Usuário Existente</span>');
					}else{
						jQuery(elem).closest('.control-group').removeClass('error');
						jQuery('.salvar-colaborador').removeAttr('disabled');
						jQuery(elem).closest('.control-group').find('span.help-inline').remove();
					}
				}
			});

		});

	});

</script>