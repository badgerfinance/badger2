Ext.define('Badger2.view.Main', {
    extend: 'Ext.tab.Panel',
    xtype: 'main',
    requires: [
        'Ext.TitleBar',
        'Badger2.view.Accounts'
    ],
    config: {
        tabBarPosition: 'bottom',
        tabBar : {cls: 'clsTabBar'},
        items: [
            {
                xtype: 'Accounts'
            }
        ]
    }
});
