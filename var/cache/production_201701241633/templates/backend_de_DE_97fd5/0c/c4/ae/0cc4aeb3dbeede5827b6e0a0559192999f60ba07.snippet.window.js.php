<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:34:35
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\theme\view\list\window.js" */ ?>
<?php /*%%SmartyHeaderCode:963658b8499b0c5a56-90730016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cc4aeb3dbeede5827b6e0a0559192999f60ba07' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\theme\\view\\list\\window.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '963658b8499b0c5a56-90730016',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b8499b234d53_16154550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8499b234d53_16154550')) {function content_58b8499b234d53_16154550($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

/**
 * Shopware Application
 *
 * @category  Shopware
 * @package   Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */

//

//

Ext.define('Shopware.apps.Theme.view.list.Window', {
    extend: 'Shopware.window.Listing',
    alias: 'widget.theme-list-window',
    height: '80%',
    width: '75%',
    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'listing','default'=>'Theme manager','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing','default'=>'Theme manager','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme Manager<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'listing','default'=>'Theme manager','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    minWidth: 600,


    configure: function() {
        return {
            listingGrid: 'Shopware.apps.Theme.view.list.Theme',
            listingStore: 'Shopware.apps.Theme.store.Theme',

            extensions: [
                { xtype: 'theme-listing-info-panel' }
            ]
        };
    },

    initComponent: function() {
        var me = this;

        me.dockedItems = [
            me.createToolbar()
        ];

        me.callParent(arguments);
    },

    /**
     * Following functions creates the toolbar elements
     * @returns { Ext.toolbar.Toolbar }
     */
    createToolbar: function () {
        var me = this;

        me.toolbar = Ext.create('Ext.toolbar.Toolbar', {
            items: me.createToolbarItems(),
            ui: 'shopware-ui',
            dock: 'top'
        });

        return me.toolbar;
    },

    createToolbarItems: function () {
        var me = this,
            items = [];

        items.push({ xtype: 'tbspacer', width: 6 });
        items.push(me.createShopCombo());
        items.push({ xtype: 'tbspacer', width: 12 });
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'createTheme'),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1){?>*/
        items.push(me.createAddButton());
        /*<?php }?>*/
        items.push(me.createRefreshButton());
        /*<?php ob_start();?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['acl_is_allowed'][0][0]->isAllowed(array('privilege'=>'configureSystem'),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?>*/
        items.push(me.createSettingsButton());
        /*<?php }?>*/
        items.push('->');
        items.push(me.createSearchField());

        return items;
    },

    createShopCombo: function () {
        var me = this;

        me.shopStore = Ext.create('Shopware.apps.Base.store.Shop').load({
            callback: function(records) {
                var first = records.shift();
                me.shopCombo.select(first);
            }
        });

        me.shopCombo = Ext.create('Ext.form.field.ComboBox', {
            name: 'shop',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'shop_combo','default'=>'Template-Auswahl für Shop','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shop_combo','default'=>'Template-Auswahl für Shop','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme-Auswahl für Shop<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'shop_combo','default'=>'Template-Auswahl für Shop','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            editable: false,
            labelWidth: 175,
            labelStyle: 'margin-top: 2px',
            store: me.shopStore,
            displayField: 'name',
            valueField: 'id',
            listeners: {
                select: function() {
                    me.fireEvent('shop-changed', me);
                }
            }
        });

        return me.shopCombo;
    },

    createAddButton: function() {
        var me = this;

        me.addButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'create','default'=>'Create theme','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create','default'=>'Create theme','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Theme erstellen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'create','default'=>'Create theme','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            iconCls: 'sprite-application--plus',
            handler: function() {
                me.fireEvent('create-theme', me);
            }
        });

        return me.addButton;
    },

    createRefreshButton: function() {
        var me = this;

        me.refreshButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'refresh','default'=>'Refresh list','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'refresh','default'=>'Refresh list','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Themes neu laden<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'refresh','default'=>'Refresh list','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            iconCls: 'sprite-arrow-circle-135',
            handler: function() {
                me.fireEvent('refresh-list', me);
            }
        });

        return me.refreshButton;
    },

    createSettingsButton: function() {
        var me = this;

        me.settingsButton = Ext.create('Ext.button.Button', {
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings','default'=>'Settings','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings','default'=>'Settings','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Einstellungen<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings','default'=>'Settings','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            iconCls: 'sprite-gear',
            handler: function() {
                me.fireEvent('open-settings', me);
            }
        });

        return me.settingsButton;
    },

    createSearchField: function() {
        var me = this;

        me.searchField = Ext.create('Ext.form.field.Text', {
            cls: 'searchfield',
            width: 170,
            emptyText: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'search','default'=>'Search ...','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search','default'=>'Search ...','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Suchen ...<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'search','default'=>'Search ...','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            enableKeyEvents: true,
            checkChangeBuffer: 500,
            listeners: {
                change: function (field, value) {
                    me.fireEvent('search-theme', me, field, value);
                }
            }
        });

        return me.searchField;
    }

});

//

<?php }} ?>