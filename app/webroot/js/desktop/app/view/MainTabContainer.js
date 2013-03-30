Ext.define('Badger2.view.MainTabContainer', {
	extend: 'Ext.tab.Panel',
	
	alias: 'widget.mainTabContainer',
	
	items: [
		{
			xtype: 'transactionGrid',
			accountId: 3
		}
	]
});