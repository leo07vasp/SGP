<div class="row-fluid ">
<span class="span9">
<?php echo $this->Session->flash();  ?>
<a href="#myModal" role="button" class="btn btn-primary pull-right" data-toggle="modal">Nova Mensagem</a>
</span>
</div>
  
<div class="row-fluid mensagens-container">
    <div class="span3">
<div class="btn-group">
  <button class="btn">Não lidas</button>
  <button class="btn">Enviadas</button>
  <button class="btn">Todas</button>
</div>
      <ul class="msg">
<?php foreach($mensagens as $mensagem): ?>   

	<li class="int-msg" data-msg="<?php echo $mensagem['Msg']['id']?>">
          <h6>  Assunto: <?php echo $mensagem['Msg']['titulo'] ?></h6>
          <span class="de"><strong>De:</strong> <?php echo $mensagem['de']['username'] ?></span>
          <strong class="date">Em <?php echo strftime("%d/%m/%Y às %H:%M:%S", strtotime($mensagem['Msg']['criada'])); ?></strong>
      	</li>		


<?php endforeach; ?>
      </ul>
    </div>
    
    


    <div class="span6 mensagem-conteudo well">
    
    <a class="btn btn-danger" href="#">Excluir</a>
    <a class="btn btn-success" href="#">Marcar como lida</a>


    <h6 class="sender"></h6>

    <div class="msg-text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. In unde vel minus optio sed eum perferendis rem doloribus hic magni labore facilis quia reprehenderit ex at dolorum earum quaerat possimus. A alias nemo minima illum ex recusandae cumque sunt veniam id deserunt quidem eum mollitia fugit. Dolores vitae aperiam a ut esse suscipit fugiat reprehenderit. Ut iure unde optio sapiente vero repellat commodi quisquam assumenda nemo tenetur quis sint ea cum deleniti nobis voluptatem illum consequuntur quod aliquid odio eaque temporibus dolore nesciunt tempora error quo dolorem explicabo? Obcaecati quaerat quisquam veritatis tenetur consequatur non dolorum earum porro iste aspernatur.
    </div>  
    
    </div>
  </div>
  
  <div id="myModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    <h3>Para</h3>
  </div>
  <div class="modal-body">

  <?php   echo $this->Form->create('Msgs', array(
        'class' => 'form senderform',
        'action' => 'sendMsg',
        'inputDefaults' => array(
          'div' => 'control-group',
          'label' => array('class' => 'control-label'),
          'between' => '<div class="controls">',
          'after' => '</div>',
          
          'error' => array('attributes' => array('wrap' => 'div', 'class' => 'alert alert-error'))
      ) ));
       ?>




  <label>Selecione o Destinatário</label>
    <?php 

        unset($users[$this->Session->read('Auth.User.id')]);

        echo $this->Form->input('de', array('type'=>'hidden','value'=> ''.$this->Session->read('Auth.User.id').'')); 
        echo $this->Form->input('status', array('type'=>'hidden','value'=> '0')); 
        echo $this->Form->input('criada', array('type'=>'hidden','value'=> ''.date("Y-m-d H:i:s").'')); 
        echo $this->Form->input('para', array('class' => 'customSelect' ,'options' => $users, 'label' => false));
        echo $this->Form->input('titulo',array('placeholder' => 'Titulo', 'required' ), array('label' => 'Titulo')); 
        echo $this->Form->input('mensagem',array('placeholder' => 'Mensagem', 'required', 'type' => 'textarea' ), array('label' => 'Mensagem')); 
     ?>


   
  </div>
  <div class="modal-footer">
    <a  data-dismiss="modal" href="#" class="btn">Fechar</a>
    <a href="#" onclick="jQuery('.senderform').submit()" class="btn btn-primary">Enviar Mensagem</a>
  </div>
</div>
  
  
  <script>
    jQuery(document).ready(function($) {
	
	$(".customSelect").select2({
	
	}); 
	
	$('.modal').modal({
		show: false
	});
	
      jQuery('ul.msg li').on('click', function(){
        elem = jQuery(this);
        jQuery('ul.msg li').removeClass('msg-active');
        elem.addClass('msg-active')
        jQuery('ul.msg li .date, ul.msg li .de').hide();
        elem.find('.date, .de').css('display', 'block');

                jQuery.ajax({
        dataType: "json",
              type: "POST",
              evalScripts: true,
              url: '<?php echo Router::url(array('controller'=>'msgs','action'=>'getmensagem'));?>',
              data: ({id:jQuery(elem).data('msg')}),
              beforeSend: function(){
             
                
              },

        success: function(data){
         elem.find('de').text();
         var de = elem.find('.de').text();
         jQuery('.span6.mensagem-conteudo > .msg-text').text(data.Msg.mensagem);
         jQuery('.span6.mensagem-conteudo .sender').html(de);
        }
      });




      });
    });

  </script>