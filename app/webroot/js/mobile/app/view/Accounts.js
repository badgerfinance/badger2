Ext.define('Badger2.view.Accounts', {
    extend: 'Ext.Panel',
    xtype: 'Accounts',
    requires: [
		'Badger2.view.Accounts.List'
    ],
    config: {
    	title: 'Accounts',
    	iconCls: 'star',
    	layout: {
    		type: 'card',
    		align: 'strech'
    	},
    	cls: 'viewAccounts',
        items: [ 
        	{
        		xtype: 'AccountsList'
        	}
        ]
    }
});
