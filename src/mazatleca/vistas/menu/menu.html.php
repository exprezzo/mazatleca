<div class="nav ">
  <ul>
	<?php
		foreach ($this->paginas as $pagina){
		?>
				<li >
					<a href="/menu/editarPagina?paginaId=<?php echo $pagina['id']; ?>" rel="slide" class="<?php $this->getMenuState($pagina['texto_menu']); ?>" ><?php echo $pagina['texto_menu']; ?></a>
				</li>		
		<?php
		}
	?>		
  </ul>
</div>