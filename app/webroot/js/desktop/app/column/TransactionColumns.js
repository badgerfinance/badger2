Ext.ns('badger.desktop.column');
badger.desktop.column.TransactionColumns = [
	{ text: 'Valuta Date', dataIndex: 'valuta_date', xtype: 'datecolumn',
		editor: {
			xtype: 'datefield',
			allowBlank: false
		}
	}, 
	{ text: 'Title', dataIndex: 'title',
		editor: {
			xtype: 'textfield',
			allowBlank: false
		}
	},
	{ text: 'Amount', dataIndex: 'amount', xtype: 'numbercolumn', align: 'right',
		editor: {
			xtype: 'numericfield',
			allowBlank: false,
			hideTrigger: true,
			decimalPrecision: 2,
			alwaysDisplayDecimals: true
		}
	},
	{ text: 'Tags', dataIndex: 'tags', minWidth: 125,
		xtype: 'templatecolumn', tpl: '<tpl for="tags" between=", ">{title}</tpl>',
		editor: {
			xtype: 'boxselect',
			store: Ext.create('badger.desktop.store.TagStore'),
			displayField: 'title',
			valueField: 'id',
			multiSelect: true,
			selectOnTab: true,
			grow: true,
			growMin: 65,
			hideTrigger: true
		}
	},
	{ text: 'Transaction Partner', dataIndex: 'transaction_partner', hidden: true,
		editor: {
			xtype: 'textfield'
		}
	},
	{ text: 'Description', dataIndex: 'description',
		editor: {
			xtype: 'textareafield',
			grow: true,
			growMin: 65
		}
	},
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
