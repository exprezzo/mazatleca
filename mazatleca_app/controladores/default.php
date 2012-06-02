<?php
class DefaultController extends Controlador{
	
	
			
	function home($rutaContenido=null ){				
		$this->renderVista('Home','default/home.html.php');				
	}
		
	private function renderVista($menuText,$contenido){
		require_once('../mazatleca_app/vistas/default_view.php');		
		$pagina= new Layout();
		$vista=new DefaultView($menuText,$contenido);
		
		$pagina->setSeccion('contenido',$vista);		
		$pagina->render();
	}
}
?>