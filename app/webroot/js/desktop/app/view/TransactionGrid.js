Ext.syncRequire('badger.desktop.column.TransactionColumns');

Ext.define('badger.desktop.view.TransactionGrid', {
	extend: 'Ext.grid.Panel',
	
	alias: 'widget.transactionGrid',
	
	title: 'Transactions',
	
	closable: true,
	
	columns: badger.desktop.column.TransactionColumns,
	
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