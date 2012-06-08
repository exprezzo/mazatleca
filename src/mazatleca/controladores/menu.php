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
	function getMenus(){
		$data=array(
			'id'=>1,'titulo'=>'titulo','contenido'=>'contenido'
		);
		$resp= array(
			'success'=>true,
			'msg'=>'mensaje',
			'data'=>$data
		);
		echo json_encode($resp);
	}
}
?>