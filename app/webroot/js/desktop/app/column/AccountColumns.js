Ext.ns('badger.desktop.column');
badger.desktop.column.AccountColumns = [
	{ text: 'Title', dataIndex: 'title', minWidth: 125 },
	{ text: 'Current Amount', dataIndex: 'currentAmount', minWidth: 125, xtype: 'numbercolumn', align: 'right' },
	{ text: 'Currency', dataIndex: 'currency', minWidth: 50, xtype: 'templatecolumn', tpl: '{currency.symbol}', hidden: false },
	{ text: 'Description', dataIndex: 'description', minWidth: 150, hidden: true },
	{ text: 'Tags', dataIndex: 'tags', minWidth: 125, xtype: 'templatecolumn', tpl: '<tpl for="tags" between=", ">{title}</tpl>', hidden: true },
	{ text: 'Lower Limit', dataIndex: 'lowerLimit', minWidth: 150, xtype: 'numbercolumn', align: 'right', hidden: true },
	{ text: 'Upper Limit', dataIndex: 'upperLimit', minWidth: 150, xtype: 'numbercolumn', align: 'right', hidden: true }
];
