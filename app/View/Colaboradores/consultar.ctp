<div style="margin:0 auto;">


<?php echo $this->Session->flash(); ?>


<h1>Colaboradores cadastrados</h1>


<script type="text/javascript" charset="utf-8">

            $(document).ready(function() {
                    $('#col_cadastrados').dataTable( {
        "sDom": "<'row-fluid'<'span6'T><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
            "oLanguage": {
            "sInfo": "Mostrando (_START_ a _END_) de um total de _TOTAL_ registros", 
             "sZeroRecords": "Não há registros",
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


<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered table-hover" id="col_cadastrados">

    <col style="width:3%;" />
    <col style="width:20%" />
    <col style="width:15%" />
    <col style="width:15%" />
    <col style="width:15%" />
    <col style="width:10%" />
    

        
   <thead>
    <tr>
        <th>#</th>
        <th>Nome</th>
        <th>Funcão</th>
        <th>Email</th>
        <th>Usuario de Sistema</th>
        <th>Ações</th>
        
    </tr>
    </thead> 

<tbody>
    <?php foreach ($colaboradores as $colaborador): ?>
    
    
    <tr>
    	<td><?php echo $colaborador['Colaboradore']['id'] ?></td>
    	<td><?php echo $colaborador['Colaboradore']['nome'] ?></td>
    	<td><?php echo $colaborador['Colaboradore']['funcao'] ?></td>
    	<td><?php echo $colaborador['Colaboradore']['email'] ?></td>
        
        <td><?php echo ($colaborador['Colaboradore']['isuser'] == 1) ? 'Sim' : 'Não'; ?></td>
           
    	<td align="center" nowrap="nowrap">
            
    		<?php echo $this->Html->link('Editar '.$this->Html->tag('i', '', array('class' => 'icon-edit')),
            array('controller' => 'colaboradores', 'action' => 'editar', $colaborador['Colaboradore']['id']),
            array('class' => 'btn', 'title' => 'Editar' , 'escape'=>false)
            ); ?>
            
            
            <?php 
               echo $this->Html->link('Excluir '. $this->Html->tag('i', '', array('class' => ' icon-trash')), 
                array('controller' => 'colaboradores', 'action' => 'excluir', $colaborador['Colaboradore']['id']),
                array('class' => 'btn', 'title' => 'Excluir' , 'escape'=>false), "Deseja realmente excluir este colaborador?"); 
             ?>
            
    	</td>
     
     </tr>
    <?php endforeach; ?>
 </tbody>   

</table>
 </div>