Ext.define('Badger2.view.NewTransaction', {
    extend: 'Ext.Panel',
    xtype: 'NewTransaction',
    requires: [
//		'Badger2.view.Accounts.List'
    ],
    config: {
    	title: 'New Transaction',
    	iconCls: 'add',
    	layout: {
    		type: 'card',
    		align: 'strech'
    	},
    	cls: 'newTransaction',
        items: [ 
        	{
//        		xtype: 'AccountsList'
        	}
        ]
    }
});
