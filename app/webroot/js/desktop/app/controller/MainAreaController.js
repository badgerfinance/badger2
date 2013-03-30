Ext.define('Badger2.controller.MainAreaController', {
	extend: 'Ext.app.Controller',

	models: [],
	stores: [],
	views: ['MainTabContainer', 'TransactionGrid'],
	refs: [],
	
	openTransactionList: function(accountId) {
		this.getView('MainTabContainer').addTab(Ext.create('Badger2.view.TransactionGrid'));
	}
	
});