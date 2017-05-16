//{block name="backend/article/view/detail/base"}
// {$smarty.block.parent}
Ext.define('Shopware.apps.DigiPubHeimTech.view.Base', {
    override:'Shopware.apps.Article.view.detail.Base',

    /**
     * This extjs override will call the original method first
     * and then change the xtype of the 3rd field
     */
    createRightElements: function() {
        var me = this,
            result = me.callParent(arguments);

        result[4].fieldLabel = 'Dat neue FieldLabel';

/*
        me.digiPubBox = Ext.create('Ext.form.field.ComboBox', {
            queryMode: 'local',
            store : me.supplierStore,
            name: 'digiPubBox',
            fieldLabel: "DigiPub",
            emptyText: "DigiPub2",
            valueField: 'id',
            displayField: 'name',
            editable: true,
            labelWidth: 155,
            anchor: '100%'
        });

        result[5] = me.digiPubBox;
*/
        return result;
    },  onStoresLoaded: function(article, stores) {

        var me = this;
        me.callParent(article, stores);

       // me.digiPubBox.bindStore(stores['suppliers']);
    }



});
//{/block}