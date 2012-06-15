<div class="nav ">
  <ul>
	<?php
		foreach ($this->paginas as $pagina){
		?>
				<li >
					<a href="#page<?php echo $pagina['id']; ?>" rel="slide" class="<?php $this->getMenuState($pagina['texto_menu']); ?>" ><?php echo $pagina['texto_menu']; ?></a>
				</li>		
		<?php
		}
	?>		
	
	
  </ul>
</div>

<!--style type="text/css">
	li.selected{
		font-weight:bold;
	}
	li a{
		text-decoration:none;
	}
</style>

<ul>
	<li class="<?php /*$this->getMenuState('Home'); ?>"><a href="/home.html">Home</a></li>
	<li class="<?php $this->getMenuState('MiPerfil'); */?>"><a href="/MiPerfil.html">Mi Perfil</a></li>		
</ul-->
