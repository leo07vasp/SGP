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
	<?php echo $this->fetch('script'); ?>
	<?php echo $this->Html->script($this->Html->url('/js/jquery-1.9.1.min.js', true)); ?>
	<?php echo $this->Html->script($this->Html->url('/js/bootstrap.min.js', true)); ?>
	<?php echo $this->Html->script($this->Html->url('/js/jquery.dataTables.js', true)); ?>
	<?php echo $this->Html->script($this->Html->url('/js/dataTables.bootstrap.js', true)); ?>
	
	</head>
<body>
<!--?php echo $this->params['controller']; die; ?-->
 <?php echo $this->element('menuTop'); ?>
	
	
	
	<div class="container-fluid" id="container">
		<div class="container" id="content">
			<!--?php echo $this->fetch('title'); ?-->
			<?php echo $this->fetch('content'); ?>
		</div>
	</div>
	

</body>
</html>