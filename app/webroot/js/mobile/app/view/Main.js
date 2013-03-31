Ext.define('Badger2.view.Main', {
    extend: 'Ext.tab.Panel',
    xtype: 'main',
    requires: [
        'Ext.TitleBar',
        'Badger2.view.Accounts',
        'Badger2.view.NewTransaction'
    ],
    config: {
        tabBarPosition: 'bottom',
//        tabBar : {cls: 'clsTabBar'},
        items: [
            {
                xtype: 'Accounts'
            }, {
                xtype: 'NewTransaction'
            }
        ]
    }
});
