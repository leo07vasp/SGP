<div style="margin:0 auto;">


<?php echo $this->Session->flash(); ?>


<h1>Colaboradores cadastrados</h1>


<pre>
<?php foreach ($colaboradores as $colaborador): ?>
	<?php print_r($colaborador); ?>
<?php endforeach?>
</pre>



<script type="text/javascript" charset="utf-8">

            $(document).ready(function() {
                    $('#cli_cadastrados').dataTable( {
        "sDom": "<'row-fluid'<'span6'T><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
            "oLanguage": {
            "sInfo": "Mostrando (_START_ a _END_) de um total de _TOTAL_ registros", 
              "sInfoFiltered": " - filtrado _MAX_ registros",
             "sSearch": "Buscar",   
      "oPaginate": {
        "sNext": "Proximo",
         "sPrevious": "Anterior"
      }
    },

        "oTableTools": {
            "aButtons": [
                "copy",
                "print",
                {
                    "sExtends":    "collection",
                    "sButtonText": 'Save <span class="caret" />',
                    "aButtons":    [ "csv", "xls", "pdf" ]
                }
            ]
        }
    } );
            });

</script>

<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover" id="cli_cadastrados">

    <col style="width:3%;" />
    <col style="width:20%" />
    <col style="width:15%" />
    <col style="width:15%" />
    <col style="width:15%" />
    <col style="width:5%" />

        
   <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Funcão</th>
        <th>Email</th>
        <th>Dominio</th>
        <th>Ações</th>
    </tr>
    </thead> 

<tbody>
    <?php foreach ($colaboradores as $colaborador): ?>
    <tr>
    	<td><?php echo $colaborador['Cliente']['id'] ?></td>
    	<td><?php echo $colaborador['Cliente']['nome_cliente'] ?></td>
    	<td><?php echo $colaborador['Cliente']['razao_social'] ?></td>
    	<td><?php echo $colaborador['Cliente']['tipo_comercio'] ?></td>
    	<td><?php echo $colaborador['Cliente']['dominio'] ?></td>
    	<td align="center" nowrap="nowrap">
            
    		<?php echo $this->Html->link('Editar '.$this->Html->tag('i', '', array('class' => 'icon-edit')),
            array('controller' => 'clientes', 'action' => 'editar', $colaborador['Cliente']['id']),
            array('class' => 'btn', 'title' => 'Editar' , 'escape'=>false)
            ); ?>
            
            
            <?php 
               echo $this->Html->link('Excluir '. $this->Html->tag('i', '', array('class' => ' icon-trash')), 
                array('controller' => 'clientes', 'action' => 'excluir', $colaborador['Cliente']['id']),
                array('class' => 'btn', 'title' => 'Excluir' , 'escape'=>false), "Deseja realmente excluir este cliente?"); 
             ?>
            
    	</td>
     </tr>
    <?php endforeach; ?>
 </tbody>   

</table>
 </div>