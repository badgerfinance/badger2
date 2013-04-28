Ext.define('badger.desktop.store.TagStore', {
	extend: 'Ext.data.Store',
	
	storeId: 'TagStore',
	
	model: Bancha.getModel('Tag'),
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
