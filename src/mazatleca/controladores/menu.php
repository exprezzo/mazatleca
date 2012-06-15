<?php 
#	NAMESPACE CMS;

class MenuController extends Controlador{

	function render(){
		#==============================================================================================================================
		#							OBTENGO EL CONTENIDO A MOSTRAR 
		#==============================================================================================================================
		//Obtengo el modelo encargado de gestionr la informacion
		$modelo=$this->getModelObject(); //TODO: Aplicar Singleton Pattern
		//Solicita al modelo, las paginas registradas
		//TODO: $paginas=$modelo->getPaginas();	//al codigo siguiente convertirlo en esta funcion
		$sql='SELECT * FROM cms_paginas';		
		$db=$modelo->getDb();
		$sth=$db->prepare($sql);
		$res=$sth->execute();	
		#--------------------------------------------------------------------------------------------------------------------------------
		#				REVISAR ERROR TODO: pasar este bloque al nucleo, todavia no se si al modelo o al controlador, ¿o a la vista?
		#--------------------------------------------------------------------------------------------------------------------------------
		if (!$res){
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, succes=false y eso;
			print_r($sth->errorInfo() );
			return false;
		}	
		#---------------------------------------------------------------------------------------------------
		$paginas= $sth->fetchAll(PDO::FETCH_ASSOC);			            #   <----     eL CONTENIDO ESTA ALMACENADO EN PAGINAS
		#---------------------------------------------------------------------------------------------------
		#==============================================================================================================================
		$pagina=new Pagina('temas/naturalist/index_cms.html.php');
		$menu= new Menu('menu/menu.html.php');
		$menu->paginas=$paginas;
		$pagina->setSeccion('menu',$menu);
		
		//$menuAdmin = new Vista('menu/paginas_listado.html.php','fgh'); 
		$menuAdmin = new Vista(); 
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
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, success=false y eso;
			print_r($sth->errorInfo() );
			return false;
		}	
		#===================================================================================================	
		header('Location: /menu/editarPagina?idPagina='.$_POST['id']);		
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
		$idPagina=$_GET['paginaId'];
		#========================================================================================================
		//Obtengo el modelo encargado de gestionr la informacion
		$modelo=$this->getModelObject(); //TODO: Aplicar Singleton Pattern
		//Solicita al modelo, las paginas registradas
		//TODO: $paginas=$modelo->getPaginas();	//al codigo siguiente convertirlo en esta funcion
		$sql='SELECT * FROM cms_paginas WHERE id=:idPagina';		
		$db=$modelo->getDb();
		$sth=$db->prepare($sql);
		$sth->bindValue(':idPagina',$idPagina);
		$res=$sth->execute();	
		#-----------------------------------------------------------------------------------------------------
		#				REVISAR ERROR
		#-----------------------------------------------------------------------------------------------------
		if (!$res){
			echo "Error: sql=".$sql; //TODO: RESPONDER EN JSON, succes=false y eso;
			print_r($sth->errorInfo() );
			return false;
		}	
		#-----------------------------------------------------------------------------------------------------
		$paginaObj= $sth->fetchAll(PDO::FETCH_ASSOC);

		#========================================================================================================
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
		#========================================================================================================
		$pagina=new Pagina('temas/naturalist/index_cms.html.php');
		$menu= new Menu('menu/menu.html.php');
		$menu->paginas = $paginas;
		$pagina->setSeccion('menu',$menu);
		
		$menuAdmin = new Vista('menu/pagina_edit.html.php','fgh'); 
		$menuAdmin->pagina=$paginaObj[0];
		$pagina->setSeccion('contenido',$menuAdmin);
		$pagina->render();
		#========================================================================================================
	}
}
?>