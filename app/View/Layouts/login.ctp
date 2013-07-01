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
                    echo $this->Form->create('User');
                    echo $this->Form->input('username', array("label" => "Usuário", "placeholder" => "Usuário"));
                    echo $this->Form->input('password', array("label" => "Senha", "placeholder" => "Senha"));
                    echo $this->Form->end(array(
                              'label' => 'Login',
                              'class' => 'btn btn-success'
                          )); 
            ?>

      </div>
    </div>
  </div>


    
  </body>
      
  
  
</html>






<style>

  .login-form input{height: auto !important;}
  .login-form {
  margin: 0 auto !important;
  width: 250px;
  display: block;
  }
</style>