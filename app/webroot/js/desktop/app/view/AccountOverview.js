Ext.define('badger.desktop.view.AccountOverview', {
    extend: 'Ext.grid.Panel',

	alias: 'widget.accountOverview',
	
	title: 'Account Overview',
	
	forceFit: true,
	
	overlapHeader: true,
	
	store: Ext.create('Ext.data.Store', {
	    model: Bancha.getModel('Account'),
	    remoteFilter: true,
	    remoteSort: true,
	    sortable: true,
	    sorters: [
		    {
		    		property: 'title',
		    		direction: 'ASC'
		    }
	    ]
	}),
//	
////	store: Ext.data.StoreManager.lookup('Account'),
//	
	
	initComponent: function() {

//        this.store = 'ForumThreads';

		this.columns = [
			{ text: 'Title', dataIndex: 'title', minWidth: 150 },
			{ text: 'Current Amount', dataIndex: 'currentAmount', minWidth: 150 },
			{ text: 'Currency', dataIndex: 'currency_id', minWidth: 15, hidden: true }
		];
		
		this.store.load();
		this.callParent(arguments);
	}
//	,
//	
//	afterRender: function() {
//		this.store.load();
//	}
});