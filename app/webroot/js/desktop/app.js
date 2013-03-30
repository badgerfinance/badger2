Ext.Loader.setConfig({ enabled: true });

Ext.onReady(function() {
	Bancha.init();
});

function startApp() {
	Ext.application({
		name: 'Badger2',
		appFolder: 'js/desktop/app',
		autoCreateViewport: true,
		models: [
		         'Bancha.model.Account', 
		         'Bancha.model.AccountProperty', 
		         'Bancha.model.Currency', 
		         'Bancha.model.RecurringTransaction', 
		         'Bancha.model.Setting', 
		         'Bancha.model.Tag', 
		         'Bancha.model.Transaction', 
		         'Bancha.model.AccountsTag', 
		         'Bancha.model.ChildTagsParentTag', 
		         'Bancha.model.RecurringTransactionsTag', 
		         'Bancha.model.TagsTransaction'
		],
		controllers: ['SidebarController', 'MainAreaController'],
		
		stores: [
//			Ext.create('Ext.data.Store', {
//				storeId: 'Account',
//				model: Bancha.getModel('Account')
//			})
		],
		
		launch: function() {
	//		this.callParent(arguments);
		}
	});
}
