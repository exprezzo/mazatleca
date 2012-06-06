<?php
class DefaultController extends Controlador{
	
	
			
	function home($rutaContenido=null ){				
		$this->renderVista('Home','default/home.html.php');				
	}
		
	private function renderVista($menuText,$contenido){
		//require_once('../mazatleca_app/vistas/default_view.php');		
		//$pagina= new Layout();
		$pagina= new Pagina($tema='../index.php');		
		$vista=new Vista($menuText,$contenido);		
		$pagina->setSeccion('contenido',$vista);		
		$pagina->render();
	}
}
?>