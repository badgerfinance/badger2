Ext.define('badger.desktop.controller.MainAreaController', {
	extend: 'Ext.app.Controller',
	
	models: [],
	stores: ['TransactionStore'],
	views: ['MainTabContainer', 'TransactionGrid'],
	refs: [
		{
			ref: 'mainTabContainer',
			selector: 'mainTabContainer'
		}
	],
	
	openTransactionList: function(accountId, accountTitle) {
		var view = this.getMainTabContainer();
		var tab = view.child('*[accountId=' + accountId + ']');
		if (!tab) {
			tab = view.add(Ext.create('badger.desktop.view.TransactionGrid', {
				accountId: accountId,
				accountTitle: accountTitle
			}));
		}
		tab.show();
	}
	
});