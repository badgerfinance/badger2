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
	stores: ['AccountStore'],
	views: ['Sidebar', 'AccountOverview'],
	
	openTransactionList: function(self, td, cellIndex, record, tr, rowIndex, e, eOpts) {
		var ctrl = this.application.getController('MainAreaController');
		ctrl.openTransactionList(record.get('id'), record.get('title'));
	}
});