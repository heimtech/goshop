<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:05
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\application\Shopware.model.DataOperation.js" */ ?>
<?php /*%%SmartyHeaderCode:2820958b848c9b8b750-11991237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d1d8990fa585c41850f26945532dae4bc84c543' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\application\\Shopware.model.DataOperation.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2820958b848c9b8b750-11991237',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848c9baab55_44950360',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848c9baab55_44950360')) {function content_58b848c9baab55_44950360($_smarty_tpl) {?>
//
//

Ext.define('Shopware.model.DataOperation', {

    extend:'Ext.data.Model',

    phantom: true,

    fields:[
        { name: 'success', type: 'boolean' },
        { name: 'request' },
        { name: 'error', type: 'string' },
        { name: 'operation' },
    ]
});
//
<?php }} ?>