Ext.define('badger.desktop.store.TransactionStore', {
	extend: 'Ext.data.Store',
	
	requires: [
		'badger.desktop.store.AccountStore',
		'badger.desktop.store.TagsTransactionStore',
		'badger.desktop.store.StoreUtils'
	],
	
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
	],
	
	listeners: {
		load: {
			fn: function(me, records, successful, eOpts) {
				if (successful) {
					for(var index in records) {
						var record = records[index];
						
						if (record.get('counter_transaction_id') != 0) {
							Bancha.getModel('Transaction').load(record.get('counter_transaction_id'), {
								scope: {
									record: record
								},
								success: function(counterpart, operation) {
									counterpart.getAccount(
										{
											scope: {
												record: operation.scope.record,
												counterpart: counterpart
											},
											callback: function(account, operation) {
												operation.scope.record.set('counterTransaction', operation.scope.counterpart);
											}
										}
									);
								}
							});
						}
						
						badger.desktop.store.StoreUtils.loadTags(me, record);
					}
				}
			}
		}
	}
});
