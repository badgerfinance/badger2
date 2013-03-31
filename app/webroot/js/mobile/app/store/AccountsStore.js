Ext.define('Badger2.store.AccountsStore', {
	extend: 'Ext.data.Store',
	config: {
//		 model: 'Bancha.model.Account',
		 model: Bancha.getModel('Account'),
		 autoLoad: true,
		 pageSize: 10
	}
});