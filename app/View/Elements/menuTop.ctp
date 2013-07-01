	
	 <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
         
          <a class="brand" href="<?php echo $this->Html->url('/') ?> ">SPG</a>
          <div class="nav-collapse collapse">
            
             <div class="btn-group pull-right">
              <a class="btn " href="<?php echo $this->Html->url('/users/editar'); ?>"><i class="icon-user icon-black"></i> <?php echo $this->Session->read('Auth.User.username'); ?></a>
              <a class="btn dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo $this->Html->url('/users/editar'); ?>"><i class="icon-pencil"></i> Editar</a></li>
              <li><a href="<?php echo $this->Html->url('/users/configuracoes'); ?>"><i class="icon-cog"></i> Configurações</a></li>
              <li><a href="<?php echo $this->Html->url('/users/administrador'); ?>"><i class="icon-tasks"></i> Root manager</a></li>
              <li class="divider"></li>
              <li><a href="<?php echo $this->Html->url('/users/logout'); ?>"><i class="i"></i> logout</a></li>
            </ul>
          </div>
            
            <ul class="nav">
              
              <li class="dropdown">
              	<a href="#" class="dropdown-toggle" data-toggle="dropdown" >Projetos <b class="caret"></b></a>
              	<ul class="dropdown-menu">
              		<li> <a href="<?php echo $this->Html->url('/projetos/cadastrar'); ?>">Cadastrar</a></li>
              		
              		<li> <a href="<?php echo $this->Html->url('/projetos/consultar')?>">Consultar</a></li>
              	</ul>
              </li>
    
              <li class="dropdown">
              <a href="#about" class="dropdown-toggle" data-toggle="dropdown" >Colaboradoes<b class="caret"></b></a>
              <ul class="dropdown-menu">
              		<li> <a href="<?php echo $this->Html->url('/colaboradores/cadastrar')?>">Cadastrar</a></li>
              		
              		<li> <a href="<?php echo $this->Html->url('/colaboradores/consultar')?>">Consultar</a></li>
              </ul>
              
              </li>
              
              <li class="dropdown">
              <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" >Clientes<b class="caret"></b></a>
              
              <ul class="dropdown-menu">
              		<li> <a href="<?php echo $this->Html->url('/clientes/cadastrar')?>">Cadastrar</a></li>
              		<li> <a href="<?php echo $this->Html->url('/clientes/consultar')?>">Consultar</a></li>
              </ul>
              
              </li>
              
              
              <li class="dropdown">
              <a href="#contact" class="dropdown-toggle" data-toggle="dropdown" > Relatórios<b class="caret"></b></a>
              	
              <ul class="dropdown-menu">
              		<li> <a href="<?php echo $this->Html->url('/relatorios/projetos')?>">Projetos</a></li>
              		<li> <a href="<?php echo $this->Html->url('/relatorios/colaboradores')?>">Colaboradores</a></li>
              		<li> <a href="<?php echo $this->Html->url('/relatorios/clientes')?>">Clientes</a></li>
              </ul>	
              	
              </li>
              
              
              <li class="dropdown">
              	<a href="#contact" class="dropdown-toggle" data-toggle="dropdown" >Sobre o Projeto<b class="caret"></b></a>
              	
              <ul class="dropdown-menu">
              		<li> <a href="<?php echo $this->Html->url('/about/tecnologias')?>">Tecnologia</a></li>
              		<li> <a href="<?php echo $this->Html->url('/about/referencias')?>">Referencias</a></li>
              		<li> <a href="<?php echo $this->Html->url('/about/autor')?>">Autor</a></li>
              </ul>	
              	
              </li>
            
            
            
            
            
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	