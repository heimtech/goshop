<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:34:34
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\theme\model\config_set.js" */ ?>
<?php /*%%SmartyHeaderCode:3000658b8499aefa5d4-03003324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b4aa86afd111550ec99e96197378dab3c63e1a' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\theme\\model\\config_set.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3000658b8499aefa5d4-03003324',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b8499af1d858_04784195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8499af1d858_04784195')) {function content_58b8499af1d858_04784195($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.model.ConfigSet', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'id', type: 'int', useNull: true },
        { name: 'templateId', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'description', type: 'string' },
        { name: 'values' }
    ]
});

//
<?php }} ?>