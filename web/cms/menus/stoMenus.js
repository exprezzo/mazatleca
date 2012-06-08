/*
 * File: stoMenus.js
 * 
 * This file was generated by Ext Designer version 1.1.2.
 * http://www.sencha.com/products/designer/
 *
 * This file will be auto-generated each and everytime you export.
 *
 * Do NOT hand edit this file.
 */

stoMenus = Ext.extend(Ext.data.JsonStore, {
    constructor: function(cfg) {
        cfg = cfg || {};
        stoMenus.superclass.constructor.call(this, Ext.apply({
            storeId: 'stoMenus',
            root: 'data',
            url: 'menus/getMenus',
            messageProperty: 'msg',
            fields: [
                {
                    name: 'id'
                },
                {
                    name: 'nombre'
                }
            ]
        }, cfg));
    }
});
new stoMenus();