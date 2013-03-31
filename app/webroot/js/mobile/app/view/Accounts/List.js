Ext.define('Badger2.view.Accounts.List', {
    extend: 'Ext.List',
    xtype: 'AccountsList',

    
    config: {
    	title: 'Accounts',
		store: 'AccountsStore',
		itemTpl: '<div class="accountTitle">{title}</div><div class="accountAmount">{currentAmount}</div>',
		emptyList: 'no Values',
		cls: 'accountsList'
    }
});