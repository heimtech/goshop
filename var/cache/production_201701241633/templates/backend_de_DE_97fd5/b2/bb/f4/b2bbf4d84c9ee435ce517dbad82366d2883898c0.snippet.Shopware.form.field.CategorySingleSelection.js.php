<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:11
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\attribute\field\Shopware.form.field.CategorySingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:2896158b848cf92dfd4-82344758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2bbf4d84c9ee435ce517dbad82366d2883898c0' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\attribute\\field\\Shopware.form.field.CategorySingleSelection.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2896158b848cf92dfd4-82344758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cf93d9d7_42198779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cf93d9d7_42198779')) {function content_58b848cf93d9d7_42198779($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.CategorySingleSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-category-single-selection',

    getLabelOfObject: function(values) {
        var parents = Ext.clone(values.parents);

        if (!parents || parents.length <= 0) {
            parents = [];
        }
        parents.push(values.name);
        return parents.join('>');
    }
});<?php }} ?>