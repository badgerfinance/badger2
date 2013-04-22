Ext.syncRequire('badger.desktop.column.AccountColumns');

Ext.define('badger.desktop.view.AccountOverview', {
	extend: 'Ext.grid.Panel',
	
	alias: 'widget.accountOverview',
	
	title: 'Account Overview',
	
	forceFit: true,
	
	overlapHeader: true,
	
	store: 'AccountStore',
	
	columns: badger.desktop.column.AccountColumns
});
