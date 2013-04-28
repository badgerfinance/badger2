Ext.define('badger.desktop.store.AccountsTagStore', {
	extend: 'Ext.data.Store',
	
	storeId: 'AccountsTagStore',
	
	requires: [
		'badger.desktop.store.TagStore'
	],
	
	model: Bancha.getModel('AccountsTag'),
	remoteFilter: true,
	remoteSort: true,
	sortable: true,
	autoLoad: true
});
