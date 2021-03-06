<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		SPG - System Project Manager
	</title>
	<?php echo $this->fetch('css'); ?>
	<?php echo $this->Html->css($this->Html->url('/css/global.css', true)); ?>
	<?php echo $this->Html->css($this->Html->url('/css/bootstrap.min.css', true)); ?>
	<?php echo $this->Html->css($this->Html->url('/css/bootstrap-responsive.min.css', true)); ?>
	<?php echo $this->Html->css($this->Html->url('/css/jquery.dataTables.css', true)); ?>
	<?php echo $this->Html->css($this->Html->url('/css/datepicker.css', true)); ?>
	<?php echo $this->Html->css($this->Html->url('/css/select2.css', true)); ?>
	<?php echo $this->fetch('script'); ?>
	<?php echo $this->Html->script($this->Html->url('/js/jquery-1.9.1.min.js', true)); ?>
	<?php echo $this->Html->script($this->Html->url('/js/bootstrap.min.js', true)); ?>
	<?php echo $this->Html->script($this->Html->url('/js/jquery.dataTables.js', true)); ?>
	<?php echo $this->Html->script($this->Html->url('/js/dataTables.bootstrap.js', true)); ?>
	<?php echo $this->Html->script($this->Html->url('/js/bootstrap-datepicker.js', true)); ?>
	<?php echo $this->Html->script($this->Html->url('/js/locales/bootstrap-datepicker.pt-BR.js', true)); ?>
	<?php echo $this->Html->script($this->Html->url('/js/select2.js', true)); ?>
	<?php echo $this->Html->script($this->Html->url('/js/select2_locale_pt-BR.js', true)); ?>
	
	</head>
<body>
<!--?php echo $this->params['controller']; die; ?-->
 <?php echo $this->element('menuTop'); ?>
	
	
	
	<div class="container-fluid" id="wrap">
		<div class="container">
			<!--?php echo $this->fetch('title'); ?-->
			<?php echo $this->fetch('content'); ?>
		</div>


	 <div id="push"></div>
    </div>

    <div id="footer">
      <div class="container">
        <p class="muted credit"><h6>SPG</h6> Leonardo Rodrigues</p>
      </div>
    </div>

	</div>
	


</body>
</html>