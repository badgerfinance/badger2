Ext.Loader.setConfig({ enabled: true });

Ext.onReady(function() {
	Bancha.init();
});

//Ext.application({
//	name: 'Badger2',
//	appFolder: '/js/Badger2/app',
//	autoCreateViewport: true,
//	models: [
//	         'Bancha.model.Account', 
//	         'Bancha.model.AccountProperty', 
//	         'Bancha.model.Currency', 
//	         'Bancha.model.RecurringTransaction', 
//	         'Bancha.model.Setting', 
//	         'Bancha.model.Tag', 
//	         'Bancha.model.Transaction', 
//	         'Bancha.model.AccountsTag', 
//	         'Bancha.model.ChildTagsParentTag', 
//	         'Bancha.model.RecurringTransactionsTag', 
//	         'Bancha.model.TagsTransaction'
//	],
//	controllers: ['SidebarController'],
//	
//	launch: function() {
////		this.callParent(arguments);
//	}
//});	
