Ext.define('badger.desktop.store.AccountStore', {
	extend: 'Ext.data.Store',
	
	storeId: 'AccountStore',
	
	requires: [
		'badger.desktop.store.CurrencyStore',
		'badger.desktop.store.AccountsTagStore',
		'badger.desktop.store.StoreUtils'
	],
	
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
	],
	
	listeners: {
		load: {
			element: 'store',
			fn: function(me, records, successful, eOpts) {
				if (successful) {
					for(var index in records) {
						var record = records[index];
						record.getCurrency();
						
						badger.desktop.store.StoreUtils.loadTags(me, record);
					}
					
				}
			}
		}
	}
});
