<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:08
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\store\attribute_config.js" */ ?>
<?php /*%%SmartyHeaderCode:772558b848cc7c2b58-40309771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6beff04a45e15e24e6cc871659efcf5a6245f240' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\store\\attribute_config.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '772558b848cc7c2b58-40309771',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cc7d2554_36774276',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cc7d2554_36774276')) {function content_58b848cc7d2554_36774276($_smarty_tpl) {?>
Ext.define('Shopware.store.AttributeConfig', {
    extend: 'Shopware.store.Listing',
    model: 'Shopware.model.AttributeConfig',
    remoteSort: false,

    configure: function() {
        return {
            controller: 'AttributeData'
        }
    }
});
<?php }} ?>