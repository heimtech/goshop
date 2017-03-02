<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:07
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\model\attribute_config.js" */ ?>
<?php /*%%SmartyHeaderCode:1287858b848cbcd77d0-31977977%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b068d68f67945f9782e26147591616ef325b3212' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\model\\attribute_config.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1287858b848cbcd77d0-31977977',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cbd3d0d5_75371397',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cbd3d0d5_75371397')) {function content_58b848cbd3d0d5_75371397($_smarty_tpl) {?>
//

Ext.define('Shopware.model.AttributeConfig', {
    extend: 'Shopware.data.Model',

    fields: [
        { name: 'id', type: 'integer', useNull: true },
        { name: 'tableName', type: 'string' },
        { name: 'columnName', type: 'string' },
        { name: 'columnType', type: 'string' },
        { name: 'defaultValue', type: 'string', useNull: true, defaultValue: null },
        { name: 'entity', type: 'string', useNull: true },
        { name: 'dbalType', type: 'string' },
        { name: 'sqlType', type: 'string' },
        { name: 'label', type: 'string' },
        { name: 'helpText', type: 'string' },
        { name: 'supportText', type: 'string' },
        { name: 'translatable', type: 'boolean' },
        { name: 'displayInBackend', type: 'boolean', defaultValue: true },
        { name: 'pluginId', type: 'integer' },
        { name: 'configured', type: 'boolean' },
        { name: 'position', type: 'integer' },
        { name: 'custom', type: 'boolean', defaultValue: false },
        { name: 'identifier', type: 'boolean' },
        { name: 'core', type: 'boolean' },
        { name: 'arrayStore', type: 'string' },

        //pseudo columns for view generation / data operations
        { name: 'deleteButton', type: 'boolean' },
        { name: 'originalName', type: 'string', mapping: 'columnName' }
    ],

    configure: function() {
        return {
            controller: 'Attributes'
        };
    },

    allowDelete: function() {
        if (this.get('core')) {
            return false;
        }
        if (this.get('identifier')) {
            return false;
        }
        return this.get('custom');
    },

    allowNameChange: function() {
        if (this.get('identifier')) {
            return false;
        }
        return this.get('custom');
    },

    allowTypeChange: function() {
        if (this.get('identifier')) {
            return false;
        }
        return this.get('custom') || this.get('core');
    },

    allowConfigure: function() {
        return this.get('custom') || this.get('core');
    },

    merge: function(column) {
        var me = this;
        var fields = [
            'columnName',
            'columnType',
            'entity',
            'label',
            'helpText',
            'supportText',
            'arrayStore',
            'translatable',
            'displayInBackend',
            'pluginId',
            'position',
            'custom',
            'dbalType',
            'sqlType'
        ];

        Ext.each(fields, function(field) {
            me.set(field, column.get(field));
        });
    }
});<?php }} ?>