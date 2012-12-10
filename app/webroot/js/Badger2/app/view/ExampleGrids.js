Ext.define('Badger2.view.ExampleGrids', {
	extend: 'Ext.panel.Panel',
	
	alias: 'widget.examplegrids',
	
	store: [],
	
	forceFit: true,
	
	items: [
	        Ext.create('Ext.grid.Panel', {
	            title: 'Currencies',
	            scaffold: Bancha.getModel('Currency')
	        }),
	        Ext.create('Ext.grid.Panel', {
	        	title: 'Tags',
	        	scaffold: Bancha.getModel('Tag')
	        }),
	        Ext.create('Ext.grid.Panel', {
	        	title: 'Accounts',
	        	scaffold: Bancha.getModel('Account')
	        }),
	        Ext.create('Ext.grid.Panel', {
	        	title: 'Transactions',
	        	scaffold: Bancha.getModel('Transaction')
	        }),
	        Ext.create('Ext.grid.Panel', {
	        	title: 'Recurring Transactions',
	        	scaffold: Bancha.getModel('RecurringTransaction')
	        })
	]
});