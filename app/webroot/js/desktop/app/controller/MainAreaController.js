Ext.define('badger.desktop.controller.MainAreaController', {
	extend: 'Ext.app.Controller',

	models: [],
	stores: [],
	views: ['MainTabContainer', 'TransactionGrid'],
	refs: [],
	
	openTransactionList: function(accountId) {
		this.getView('MainTabContainer').addTab(Ext.create('badger.desktop.view.TransactionGrid'));
	}
	
});