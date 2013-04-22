Ext.define('badger.desktop.store.AccountStore', {
	extend: 'Ext.data.Store',
	
	storeId: 'AccountStore',
	
	model: Bancha.getModel('Account'),
	remoteFilter: true,
	remoteSort: true,
	sortable: true,
	autoLoad: true,
	sorters: [
		{
			property: 'title',
			direction: 'ASC'
		}
	]
});
