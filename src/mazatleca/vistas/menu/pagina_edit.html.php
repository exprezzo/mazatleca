<script type="text/javascript" src="/web/cms/js/menus/pnlMenus.ui.js"></script>
<script type="text/javascript" src="/web/cms/js/menus/pnlMenus.js"></script>
<script type="text/javascript" src="/web/cms/js/menus/stoMenus.js"></script>
<script type="text/javascript" src="/web/js/ckeditor/ckeditor.js"></script>
<script>

Ext.onReady(function() {
	
    Ext.QuickTips.init();
    Ext.onReady(function() {
    Ext.QuickTips.init();			

	});
	CKEDITOR.replace( 'editorContenido' );
	CKEDITOR.instances.editorContenido.on('afterCommandExec', handleAfterCommandExec);
	function handleAfterCommandExec(event)
	{		
		if (event.data.name == undefined){
			alert("Limpiar info");
		}
	}
	
});

</script>
<style>
	#cke_editorContenido  .cke_wrapper {
		background-color: transparent;
    background-image: none;
		padding: 0px;
	}
	
	#cke_editorContenido {
		border:0px;
		padding: 0px;
	}
	.cke_contents {
		height: 440px !important;
	}
</style>
<!-- Incluir los archivos javascript-->
<!-- script begin -->
	<input type="text" name="texto_menu" value="<?php echo $this->pagina['texto_menu']; ?>" /><br><br>
	<div id="myToolbar" style=""></div>
	
		  <div id="faded" >
				<ul class="show">
					  <li ><img alt="" src="images/slide_4.png" /></li>
					  <li ><img alt="" src="images/slide_2.png" /></li>
					  <li ><img alt="" src="images/slide_3.png" /></li>
					  <li ><img alt="" src="images/slide_1.png" /></li>
					  <li ><img alt="" src="images/slide_5.png" /></li>
				</ul>							
		  </div>
		  
	<!-- script end -->          
	
  <div class="inner-wrap"> <a href="#" class="prev"></a> <a href="#" class="next"></a>
	
		<div class="conteiner">
				
			  <div class="extra-wrap">			 					
				 <!--=========================================================================================================
				  PAGES  				  
				  =========================================================================================================-->				
				  
				  <div id="panelMenus" style="">
					<form action="/menu/guardarPagina" METHOD="POST">
						<input type="hidden" name="id"  value="<?php echo $this->pagina['id']; ?> " />
						<input type="hidden" name="texto_menu" value="<?php echo $this->pagina['texto_menu']; ?>" /><br><br><br>
						<textarea id="editorContenido" name="editor_data"  ><?php echo  stripslashes($this->pagina['contenido']) ; ?></textarea>
					</form>
				</div>
			  </div>
		</div>
  </div>

