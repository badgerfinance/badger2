Ext.define('badger.desktop.view.MainTabContainer', {
	extend: 'Ext.tab.Panel',
	
	alias: 'widget.mainTabContainer',
	
	items: [
		{
			xtype: 'transactionGrid',
			accountTitle: 'AccountA',
			accountId: 3
		}
	]
});