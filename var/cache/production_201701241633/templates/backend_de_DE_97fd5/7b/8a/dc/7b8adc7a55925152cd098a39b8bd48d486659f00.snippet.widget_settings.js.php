<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:16
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\index\model\widget_settings.js" */ ?>
<?php /*%%SmartyHeaderCode:1813458b848d4634459-29842005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b8adc7a55925152cd098a39b8bd48d486659f00' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\index\\model\\widget_settings.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1813458b848d4634459-29842005',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848d464bb52_09112411',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848d464bb52_09112411')) {function content_58b848d464bb52_09112411($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Index.model.WidgetSettings', {

    extend: 'Ext.data.Model',

    fields: [
        'authId',
        'height',
        'columnsShown',
        'dock',
        'pinned',
        'minimized'
    ]
});

//
<?php }} ?>