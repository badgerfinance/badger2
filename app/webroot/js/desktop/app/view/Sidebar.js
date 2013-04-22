Ext.define('badger.desktop.view.Sidebar', {
	extend: 'Ext.panel.Panel',
	
	alias: 'widget.sidebar',
	
	requires: [
		'Ext.layout.container.Accordion'
	],
	
	forceFit: true,
	
	resizable: true,
	
	width: 300,
	
	layout: 'accordion',
	
	items : [
		// TODO: => Error while rending the grid into this panel
		// Temporary fix: width (see above)
		{ 
			xtype: 'accountOverview'
		},
		{
			html: 'Bye, World!'
		}
	]
	
});