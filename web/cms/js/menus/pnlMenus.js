/*
 * File: pnlMenus.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be generated the first time you export.
 *
 * You should implement event handling and custom methods in this
 * class.
 */

pnlMenus = Ext.extend(pnlMenusUi, {
    initComponent: function() {
        pnlMenus.superclass.initComponent.call(this);
		this.gridPaginas.on( 'celldblclick' , function( grid, rowIndex, columnIndex, e ){
			var rec=grid.store.getAt(rowIndex);
			this.frmEdicion.getForm().loadRecord(rec);
			console.log(rec.data.contenido);
			CKEDITOR.instances.editorContenido.setData(rec.data.contenido);
		}, this);
		
		this.btnGuardar.on('click',function(){
			this.frmEdicion.el.mask("Procesando la solicitud, por favor espere unos segundos");
			var editor_data = CKEDITOR.instances.editorContenido.getData();
			this.frmEdicion.getForm().submit({
				url:'/menu/guardarPagina',
				params:{editor_data:editor_data},
				scope:this,
				success:function(){
					this.frmEdicion.el.unmask();
				},
				failure:function(){
					this.frmEdicion.el.unmask();
				}
			});
		},this);
    }
});
