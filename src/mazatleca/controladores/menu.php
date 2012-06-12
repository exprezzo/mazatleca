<?php 
#	NAMESPACE CMS;

class MenuController extends Controlador{

	function render(){
		$pagina=new Pagina('temas/naturalist/index_cms.html.php');
		$menu= new Menu('menu/menu.html.php');
		$pagina->setSeccion('menu',$menu);
		
		$menuAdmin = new Vista('menu/menu_admin.html.php','fgh'); 
		$pagina->setSeccion('contenido',$menuAdmin);
		$pagina->render();
	}
	
	//Crea y actualiza paginas
	function guardarPagina(){
		//Obtengo el modelo encargado de gestionr la informacion
		$modelo=$this->getModelObject(); //TODO: Aplicar Singleton Pattern				
		$sql="UPDATE cms_paginas set texto_menu=:texto_menu, contenido=:contenido WHERE id=:id";
		$db=$modelo->getDb();
		$sth=$db->prepare($sql);
		$sth->bindValue(":texto_menu", $_POST['texto_menu']);
		$sth->bindValue(":contenido",  $_POST['editor_data']);
		$sth->bindValue(":id",		   $_POST['id']);
		$res=$sth->execute();	
		#===================================================================================================
		#				REVISAR ERROR
		#===================================================================================================
		if (!$res){
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, succes=false y eso;
			print_r($sth->errorInfo() );
			return false;
		}	
		#===================================================================================================	
		
		
	}
	
	function getMenus(){
		//Obtengo el modelo encargado de gestionr la informacion
		$modelo=$this->getModelObject(); //TODO: Aplicar Singleton Pattern
		//Solicita al modelo, las paginas registradas
		//TODO: $paginas=$modelo->getPaginas();	//al codigo siguiente convertirlo en esta funcion
		$sql='SELECT * FROM cms_paginas';		
		$db=$modelo->getDb();
		$sth=$db->prepare($sql);
		$res=$sth->execute();	
		#===================================================================================================
		#				REVISAR ERROR
		#===================================================================================================
		if (!$res){
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, succes=false y eso;
			print_r($sth->errorInfo() );
			return false;
		}	
		#===================================================================================================	
		$paginas= $sth->fetchAll(PDO::FETCH_ASSOC);
		//Preparo la respuesta de manera que lo entienda el extjs
		$data=array();
		foreach($paginas as $pagina){
			$pagina['contenido']=stripslashes( $pagina['contenido'] );
			$data[]=$pagina;
		}
		
		$resp= array(
			'success'=>true,
			'msg'=>'mensaje',
			'data'=>$data
		);
		echo json_encode($resp);	//Respondo en Json
	}
	
	function editarPagina(){
		
	
	}
}
?>