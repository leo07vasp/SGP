<html>
  
  <head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    SPG - Login
  </title>
  
  <?php echo $this->Html->css($this->Html->url('/css/global.css', true)); ?>
  <?php echo $this->Html->css($this->Html->url('/css/bootstrap.min.css', true)); ?>
  <?php echo $this->Html->css($this->Html->url('/css/bootstrap-responsive.min.css', true)); ?>
  
  <?php echo $this->Html->script($this->Html->url('/js/jquery-1.9.1.min.js', true)); ?>
  <?php echo $this->Html->script($this->Html->url('/js/bootstrap.min.js', true)); ?>
  
  
  </head>
  

  <body>
    
    
  <div class="container-fluid" id="container">
    <div class="container" id="content">
      <div class="login-form">
        <?php echo $this->Session->flash(); ?>
        <?php
          if(isset($perm))
            echo '<div class="alert alert-error"><button type="button" class="close" data-dismiss="alert">&times;</button>'.$perm.'.</div>';

         ?>
            <?php 
                    echo $this->Form->create('User', array('class'=>'form-signin'));
					echo '  <h2 class="form-signin-heading">Login</h2>';
                    echo $this->Form->input('username', array("label" => "Usuário", "placeholder" => "Usuário", "class" => 'input-block-level'));
                    echo $this->Form->input('password', array("label" => "Senha", "placeholder" => "Senha", "class" => 'input-block-level'));
                    echo $this->Form->end(array(
                              'label' => 'Login',
                              'class' => 'btn btn-large btn-primary'
                          )); 
            ?>

      </div>
    </div>
  </div>


    
  </body>
      
  
  
</html>






<style>
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }


</style>