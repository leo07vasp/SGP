<div class="login-form span3">

<?php 
        echo $this->Form->create('User');
        echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->end(array(
                  'label' => 'Login',
                  'class' => 'btn btn-success'
              )); ?>

</div>

<?php echo $this->Session->flash(); ?>


<style>
  .login-form {
    margin: 0 auto;
  }
</style>