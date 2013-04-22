Ext.ns('badger.desktop.column');
badger.desktop.column.AccountColumns = [
	{ text: 'Title', dataIndex: 'title', minWidth: 150 },
	{ text: 'Current Amount', dataIndex: 'currentAmount', minWidth: 150, xtype: 'numbercolumn', align: 'right' },
	{ text: 'Currency', dataIndex: 'currency_id', minWidth: 15, hidden: true },
	{ text: 'Description', dataIndex: 'description', minWidth: 150, hidden: true },
	{ text: 'Lower Limit', dataIndex: 'lowerLimit', minWidth: 150, xtype: 'numbercolumn', align: 'right', hidden: true },
	{ text: 'Upper Limit', dataIndex: 'upperLimit', minWidth: 150, xtype: 'numbercolumn', align: 'right', hidden: true }
];
