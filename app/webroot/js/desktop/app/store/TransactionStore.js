Ext.define('badger.desktop.store.TransactionStore', {
	extend: 'Ext.data.Store',
	
	model: Bancha.getModel('Transaction'),
	remoteFilter: true,
	remoteSort: true,
	sortable: true,
	autoLoad: true,
	sorters: [
		{
			property: 'valuta_date',
			direction: 'DESC'
		}
	]
});
