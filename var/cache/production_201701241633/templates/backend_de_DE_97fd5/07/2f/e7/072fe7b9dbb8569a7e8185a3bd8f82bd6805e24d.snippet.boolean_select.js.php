<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:10
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\component\element\boolean_select.js" */ ?>
<?php /*%%SmartyHeaderCode:582658b848ce68a358-69511933%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '072fe7b9dbb8569a7e8185a3bd8f82bd6805e24d' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\component\\element\\boolean_select.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '582658b848ce68a358-69511933',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848ce6a58d2_48844832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848ce6a58d2_48844832')) {function content_58b848ce6a58d2_48844832($_smarty_tpl) {?>/**
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
 * config element used to replace the checkbox to a combobox
 * This is necessary because checkboxes have only two states,
 * but we need a third state as a fallback to the default shop value
 */

//

//
Ext.define('Shopware.apps.Base.view.element.BooleanSelect', {
    extend:'Ext.form.field.ComboBox',
    alias:[
        'widget.base-element-boolean-select'
    ],

    queryMode: 'local',
    forceSelection: true,
    editable: false,

    store: [
        ["", 'Inherited'],
        [true, 'Yes'],
        [false, 'No']
    ]
});
//
<?php }} ?>