Ext.define('Badger2.view.AccountOverview', {
    extend: 'Ext.tab.Panel',
    xtype: 'AccountOverview',
    requires: [

    ],
    config: {
        tabBarPosition: 'bottom',

        items: [
            {
                iconCls: 'home',

                styleHtmlContent: true,
                scrollable: true,

                items: {

                }
            }
        ]
    }
});
