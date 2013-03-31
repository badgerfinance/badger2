Ext.define('Badger2.view.Accounts.List', {
    extend: 'Ext.List',
    xtype: 'AccountsList',

    config: {
		flex: 1,
		store: 'AccountsStore',
		itemTpl: '<tpl>{title} ({currentAmount})</tpl>',
		emptyList: 'no Values',
		cls: 'accountsList'
    }
});