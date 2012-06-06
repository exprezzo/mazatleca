<?php
class DefaultController extends Controlador{
		
	function home($rutaContenido=null ){
		$this->renderVista('HOME','default/home.html.php');				
	}
	
	function download($rutaContenido=null ){
		$this->renderVista('DOWNLOAD','default/download.html.php');				
	}
	
	function docs($rutaContenido=null ){
		$this->renderVista('DOCS','default/docs.html.php');				
	}
	
	function contact($rutaContenido=null ){
		$this->renderVista('CONTACT','default/contact.html.php');				
	}
		
	private function renderVista($menuText,$contenido){	
		$pagina= new Pagina();			
		
		$menu =  new Menu('default/menu.html.php');		
		$pagina->setSeccion('menu',$menu);	
		$menu->setMenuActivo($menuText);
		
		$contenido =  new Vista($contenido, $menuText);
		$pagina->setSeccion('contenido',$contenido);
		
		$pagina->render();
	}
}
?>