Ext.define('badger.desktop.store.TagsTransactionStore', {
	extend: 'Ext.data.Store',
	
	storeId: 'TagsTransactionStore',
	
	requires: [
		'badger.desktop.store.TagStore'
	],
	
	model: Bancha.getModel('TagsTransaction'),
	remoteFilter: true,
	remoteSort: true,
	sortable: true,
	autoLoad: true
});
