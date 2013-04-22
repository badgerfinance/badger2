Ext.ns('badger.desktop.column');
badger.desktop.column.TransactionColumns = [
	{ text: 'Valuta Date', dataIndex: 'valuta_date', xtype: 'datecolumn' }, 
	{ text: 'Title', dataIndex: 'title' },
	{ text: 'Amount', dataIndex: 'amount', xtype: 'numbercolumn', align: 'right' },
	{ text: 'Tags', dataIndex: 'tags' },
	{ text: 'Transaction Partner', dataIndex: 'transaction_partner', hidden: true },
	{ text: 'Description', dataIndex: 'description' },
	{ text: 'Parser Text', dataIndex: 'parser_text', hidden: true },
	{ text: 'Transferal Source', dataIndex: 'transferal_source_id', hidden: true },
	{ text: 'Transferal Target', dataIndex: 'transferal_target_id', hidden: true }
];
