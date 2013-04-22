Ext.define('badger.desktop.view.MainTabContainer', {
	extend: 'Ext.tab.Panel',
	
	alias: 'widget.mainTabContainer',
	
	items: [
		{
			xtype: 'transactionGrid',
			accountId: 3
		}
	]
});