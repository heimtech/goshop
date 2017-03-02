<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:34:35
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\theme\view\detail\containers\tab_panel.js" */ ?>
<?php /*%%SmartyHeaderCode:134058b8499b958f55-54893347%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd24fae9232fdf5425bb6c8a1990f228ff7d8e48f' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\theme\\view\\detail\\containers\\tab_panel.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134058b8499b958f55-54893347',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b8499b9744d4_37272270',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8499b9744d4_37272270')) {function content_58b8499b9744d4_37272270($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.view.detail.containers.TabPanel', {
    extend: 'Ext.tab.Panel',
    alias: 'widget.theme-tab-panel',
    bodyPadding: 15,
    bodyStyle: 'background: #F9FAFA',
    layout: {
        type: 'vbox',
        align: 'stretch'
    },
    defaults: {
        flex: 1
    }
});
<?php }} ?>