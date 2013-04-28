Ext.ns('badger.desktop.column');
badger.desktop.column.TransactionColumns = [
	{ text: 'Valuta Date', dataIndex: 'valuta_date', xtype: 'datecolumn' }, 
	{ text: 'Title', dataIndex: 'title' },
	{ text: 'Amount', dataIndex: 'amount', xtype: 'numbercolumn', align: 'right' },
	{ text: 'Tags', dataIndex: 'tags', minWidth: 125, xtype: 'templatecolumn', tpl: '<tpl for="tags" between=", ">{title}</tpl>' },
	{ text: 'Transaction Partner', dataIndex: 'transaction_partner', hidden: true },
	{ text: 'Description', dataIndex: 'description' },
	{ text: 'Parser Text', dataIndex: 'parser_text', hidden: true },
	{ text: 'Counter Transaction', dataIndex: 'counterTransaction', hidden: false,
		renderer: function(value) {
			try {
				return value.getAccount().get('title') + '.' + value.get('title');
			} catch (e) {
				
			}
		}
	}
];
