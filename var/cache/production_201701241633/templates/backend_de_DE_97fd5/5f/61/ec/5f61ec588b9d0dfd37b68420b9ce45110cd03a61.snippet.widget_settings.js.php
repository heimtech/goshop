<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:17
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\index\store\widget_settings.js" */ ?>
<?php /*%%SmartyHeaderCode:3106158b848d5d8b2d0-36848210%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f61ec588b9d0dfd37b68420b9ce45110cd03a61' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\index\\store\\widget_settings.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3106158b848d5d8b2d0-36848210',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848d5da29d9_98322880',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848d5da29d9_98322880')) {function content_58b848d5da29d9_98322880($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.apps.Index.store.WidgetSettings', {

    extend: 'Ext.data.Store',

    model: 'Shopware.apps.Index.model.WidgetSettings',

    proxy: {
        type: 'localstorage',
        id: 'widget-settings-' + window.location.pathname.replace('/backend/', '')
    }
});

//
<?php }} ?>