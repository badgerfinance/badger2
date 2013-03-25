Ext.define('Badger2.view.Sidebar', {
	extend: 'Ext.panel.Panel',
	
	alias: 'widget.sidebar',
	
	store: [],
	
	forceFit: true,
	
	resizable: true,
	
	layout: 'accordion',
	
	items: [
			{
				xtype: 'accountOverview'
			},
			{
				html: 'Hello, World!'
			}
	]
});