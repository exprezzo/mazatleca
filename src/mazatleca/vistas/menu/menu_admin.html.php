<script type="text/javascript" src="/web/cms/js/menus/pnlMenus.ui.js"></script>
<script type="text/javascript" src="/web/cms/js/menus/pnlMenus.js"></script>
<script type="text/javascript" src="/web/cms/js/menus/stoMenus.js"></script>

<script>

Ext.onReady(function() {
	
    Ext.QuickTips.init();
    Ext.onReady(function() {
    Ext.QuickTips.init();			
		new pnlMenus({renderTo:'panelMenus'});
		/*card = new Ext.Panel({
			layout:'card',
			activeItem: 0,
			width:800,
			height:800,
			forceLayout:true,
			renderTo:'panelAdministracion',
			items:[
				new frmAdminHorarios(),
				{xtype:'panel',title:'otra Cosa'}
			]
		});*/
	});
	
	
});

</script>
<!-- Incluir los archivos javascript-->
<div id="panelMenus" style="margin-top:35px;margin-left:20px;">
	
</div>