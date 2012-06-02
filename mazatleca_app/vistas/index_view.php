<?php 
class Layout extends Pagina{
	
	function renderVista(){
		if ( isset($this->vista)){
			$this->vista->render();
		}
	}
	
	function setFooter($footer){
		$this->footer=$footer;
	}
	
	
	
	function render($rutaContenido=null){
		?>
		<html>
		<body>
			<div class="contenido">
				<?php $this->renderSeccion('contenido'); ?>
			</div>
		</body>
		</html>
		<?php 
	}
}

?>