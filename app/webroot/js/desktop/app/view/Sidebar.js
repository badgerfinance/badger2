Ext.define('badger.desktop.view.Sidebar', {
	extend: 'Ext.panel.Panel',
	
	alias: 'widget.sidebar',
	
    requires:[
        'Ext.layout.container.Accordion'
    ],
	
	forceFit: true,
	
	resizable: true,
	
	layout: 'accordion',
	
	items : [
// TODO:			=> Error while rending the grid into this panel
//			{ 
//				xtype: 'accountOverview'
//			},
			{
				html: 'Hello, World!'
			}
		]
	

});