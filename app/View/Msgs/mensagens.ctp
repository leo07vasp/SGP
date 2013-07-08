<div class="row-fluid ">
<span class="span9">
  <button class="btn btn-primary pull-right">Nova Mensagem</button>
</span>
</div>
  
<div class="row-fluid mensagens-container">
    <div class="span3">
      <ul class="msg">
<?php foreach($mensagens as $mensagem): ?>      	

	<li class="int-msg" data-msg="<?php echo $mensagem['Msg']['id']?>">
      		<span class="de"><strong>De:</strong> <?php echo $mensagem['de']['username'] ?></span>
      		<span class="para"><strong>Para:</strong> <?php echo $mensagem['para']['username']; ?></span>
      		<h6><?php echo $mensagem['Msg']['titulo'] ?></h6>
      	</li>		


<?php endforeach; ?>
      </ul>
    </div>
    <div class="span6 mensagem-conteudo">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. In unde vel minus optio sed eum perferendis rem doloribus hic magni labore facilis quia reprehenderit ex at dolorum earum quaerat possimus. A alias nemo minima illum ex recusandae cumque sunt veniam id deserunt quidem eum mollitia fugit. Dolores vitae aperiam a ut esse suscipit fugiat reprehenderit. Ut iure unde optio sapiente vero repellat commodi quisquam assumenda nemo tenetur quis sint ea cum deleniti nobis voluptatem illum consequuntur quod aliquid odio eaque temporibus dolore nesciunt tempora error quo dolorem explicabo? Obcaecati quaerat quisquam veritatis tenetur consequatur non dolorum earum porro iste aspernatur.
    
    </div>
  </div>
  
  
  <script>
    jQuery(document).ready(function($) {
      jQuery('ul.msg li').on('click', function(){
        elem = jQuery(this);
                jQuery.ajax({
        dataType: "json",
              type: "POST",
              evalScripts: true,
              url: '<?php echo Router::url(array('controller'=>'msgs','action'=>'getmensagem'));?>',
              data: ({id:jQuery(elem).data('msg')}),
              beforeSend: function(){
             
                
              },

        success: function(data){
         console.log(data.Msg.mensagem);
         jQuery('.span6.mensagem-conteudo').html(data.Msg.mensagem);
        }
      });




      });
    });

  </script>