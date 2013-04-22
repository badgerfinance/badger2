Ext.define('badger.desktop.controller.SidebarController', {
	extend: 'Ext.app.Controller',
	
	init: function() {
		this.control({
			'accountOverview': {
				cellclick: this.openTransactionList
			}
		});
	},
	
	models: [],
	stores: [],
	views: ['Sidebar', 'AccountOverview'],
	refs: [
		{
			ref: 'mainTabContainer',
			selector: 'mainTabContainer'
		}
	],
	
	openTransactionList: function(self, td, cellIndex, record, tr, rowIndex, e, eOpts) {
		console.debug(record);
		this.getMainTabContainer().add(Ext.create('badger.desktop.view.TransactionGrid', {
			accountId : record.get('id')
		}));
	}
});