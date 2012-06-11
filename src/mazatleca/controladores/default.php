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
		#===================================================================================================
		#							OBTENGO EL CONTENIDO A MOSTRAR 
		#===================================================================================================
		//Obtengo el modelo encargado de gestionr la informacion
		$modelo=$this->getModelObject(); //TODO: Aplicar Singleton Pattern
		//Solicita al modelo, las paginas registradas
		//TODO: $paginas=$modelo->getPaginas();	//al codigo siguiente convertirlo en esta funcion
		$sql='SELECT * FROM cms_paginas';		
		$db=$modelo->getDb();
		$sth=$db->prepare($sql);
		$res=$sth->execute();	
		#---------------------------------------------------------------------------------------------------
		#				REVISAR ERROR TODO: pasar este bloque al nucleo, todavia no se si al modelo o al controlador, ¿o a la vista?
		#---------------------------------------------------------------------------------------------------
		if (!$res){
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, succes=false y eso;
			print_r($sth->errorInfo() );
			return false;
		}	
		#---------------------------------------------------------------------------------------------------
		$paginas= $sth->fetchAll(PDO::FETCH_ASSOC);			            #   <--eL CONTENIDO ESTA ALMACENADO EN PAGINAS
		#---------------------------------------------------------------------------------------------------
	
		$paginaObj= new Pagina();						
		$menu =  new Menu('default/menu_cms.html.php');		
		$menu->paginas=$paginas;
		$paginaObj->setSeccion('menu',$menu);	
		$menu->setMenuActivo($menuText);
		
		/* Contenido cargado desde la base de datos*/		
		$contenido =  new Vista('temas/naturalist/contenido.html.php');
		$contenido->paginas=$paginas;
		$paginaObj->setSeccion('contenido',$contenido);
		/*
		// FORMA MANUAL: Contenido almacenado en archivos php
		
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
		*/
		$paginaObj->render();
	}
}
?>