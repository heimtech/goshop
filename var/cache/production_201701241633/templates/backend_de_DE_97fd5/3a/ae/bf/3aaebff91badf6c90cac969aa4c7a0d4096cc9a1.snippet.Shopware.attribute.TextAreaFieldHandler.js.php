<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:11
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\attribute\field_handler\Shopware.attribute.TextAreaFieldHandler.js" */ ?>
<?php /*%%SmartyHeaderCode:1636558b848cf35db53-92109847%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3aaebff91badf6c90cac969aa4c7a0d4096cc9a1' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\attribute\\field_handler\\Shopware.attribute.TextAreaFieldHandler.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1636558b848cf35db53-92109847',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cf36d557_99209845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cf36d557_99209845')) {function content_58b848cf36d557_99209845($_smarty_tpl) {?>/**
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
 *
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

Ext.define('Shopware.attribute.TextAreaFieldHandler', {
    extend: 'Shopware.attribute.FieldHandlerInterface',

    supports: function(attribute) {
        return (attribute.get('columnType') == 'text');
    },

    create: function(field, attribute) {
        field.xtype = 'textarea';
        field.height = 90;
        return field;
    }
});<?php }} ?>