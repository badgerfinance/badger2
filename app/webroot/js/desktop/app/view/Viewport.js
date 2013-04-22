Ext.define('badger.desktop.view.Viewport', {
    extend: 'Ext.container.Viewport',
    requires:[
        'Ext.tab.Panel',
        'Ext.layout.container.Border'
    ],

    layout: 'border',
    
    items: [{
        region: 'west',
        xtype: 'sidebar'
    },{
        region: 'center',
		xtype: 'mainTabContainer'
    }]
});