<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:34:36
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\theme\store\theme.js" */ ?>
<?php /*%%SmartyHeaderCode:2409558b8499c092dd2-62076700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '688e56415c3aa9d2c9500460c7bfd4f896f3cd5d' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\theme\\store\\theme.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2409558b8499c092dd2-62076700',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b8499c0b6050_40991041',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8499c0b6050_40991041')) {function content_58b8499c0b6050_40991041($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.store.Theme', {
    extend:'Shopware.store.Listing',
    model: 'Shopware.apps.Theme.model.Theme',

    groupField: 'version',

    groupDir: 'DESC',

    configure: function() {
        return {
            controller: 'Theme'
        };
    }
});

//
<?php }} ?>