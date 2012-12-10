Ext.define('Badger2.view.Viewport', {
	extend: 'Ext.container.Viewport',
	
    layout: 'border',
    items: [
            {
                region: 'west',
                xtype: 'sidebar'
            },
            {
            	region: 'center',
            	xtype: 'examplegrids'
            }
        ]
});