Ext.define('Badger2.view.TransactionGrid', {
	extend: 'Ext.grid.Panel',
	
	alias: 'widget.transactionGrid',
	
	title: 'Transactions',
	
	closable: true,
	
	store: Ext.create('Ext.data.Store', {
	    model: Bancha.getModel('Transaction'),
	    remoteFilter: true,
	    remoteSort: true,
	    sortable: true,
	    sorters: [
		    {
		    		property: 'valuta_date',
		    		direction: 'DESC'
		    }
	    ]
	}),
	
	columns: [
		{ text: 'Valuta Date', dataIndex: 'valuta_date', xtype: 'datecolumn' }, 
		{ text: 'Title', dataIndex: 'title' },
		{ text: 'Amount', dataIndex: 'amount', xtype: 'numbercolumn' },
		{ text: 'Tags', dataIndex: 'tags' },
		{ text: 'Transaction Partner', dataIndex: 'transaction_partner', hidden: true },
		{ text: 'Description', dataIndex: 'description' },
		{ text: 'Parser Text', dataIndex: 'parser_text', hidden: true },
		{ text: 'Transferal Source', dataIndex: 'transferal_source_id', hidden: true },
		{ text: 'Transferal Target', dataIndex: 'transferal_target_id', hidden: true }
	],
	
	afterRender: function() {
		this.store.filter('account_id', this.accountId);
		this.store.load();
	}
});