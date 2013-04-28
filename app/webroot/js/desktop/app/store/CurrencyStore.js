Ext.define('badger.desktop.store.CurrencyStore', {
	extend: 'Ext.data.Store',
	
	storeId: 'CurrencyStore',
	
	model: Bancha.getModel('Currency'),
	remoteFilter: true,
	remoteSort: true,
	sortable: true,
	autoLoad: true
});
