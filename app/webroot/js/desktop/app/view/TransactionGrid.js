Ext.syncRequire('badger.desktop.column.TransactionColumns');

Ext.define('badger.desktop.view.TransactionGrid', {
	extend: 'Ext.grid.Panel',
	
	requires:[
		'Ext.ux.form.field.BoxSelect',
		'Ext.ux.form.NumericField'
	],
	
	alias: 'widget.transactionGrid',
	
	title: 'Transactions',
	
	closable: true,
	
	columns: badger.desktop.column.TransactionColumns,
	
	plugins: [
		Ext.create('Ext.grid.plugin.RowEditing', {
			clicksToEdit: 2,
			listeners: {
				beforeedit: function(me, obj) {
					var column = obj.column;
					var record = obj.record;
					if (column.dataIndex == 'tags') {
						var value = new Array();
						record.tags().each(function(tag) {
							value.push(tag.getId());
						});
						
						column.getEditor().setValue(value);
					}
					
					return true; 
				}
			}
		})
	],
	
	initComponent: function() {
		// we want a different store for each TransactionGrid because we show different contents
		this.store = Ext.create('badger.desktop.store.TransactionStore');
		this.store.filter('account_id', this.accountId);
		if (this.accountTitle) {
			this.title = this.accountTitle + ' ' + this.title;
		}
		
		this.callParent(arguments);
	}
});