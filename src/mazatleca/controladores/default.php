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
	
	//funcion generica para cargar vistas
	function render(){
	
	}
		
	private function renderVista($menuText,$contenido){
		$pagina= new Pagina();			
		
		$menu =  new Menu('default/menu_naturalist.html.php');		
		$pagina->setSeccion('menu',$menu);	
		$menu->setMenuActivo($menuText);
		
		$menuText='CONTACT';		
		$contenido='default/home.html.php';
		$contenido =  new Vista($contenido, $menuText);
		$pagina->setSeccion('page1',$contenido);
		
		$contenido='default/docs.html.php';
		$contenido =  new Vista($contenido, $menuText);
		$pagina->setSeccion('page2',$contenido);
		
		$contenido='default/download.html.php';
		$contenido =  new Vista($contenido, $menuText);
		$pagina->setSeccion('page3',$contenido);
		
		$contenido='default/contact.html.php';
		$contenido =  new Vista($contenido, $menuText);
		$pagina->setSeccion('page4',$contenido);
		
		$contenido='default/cms.html.php';
		$contenido =  new Vista($contenido, $menuText);
		$pagina->setSeccion('page5',$contenido);
		
		$pagina->render();
	}
}
?>