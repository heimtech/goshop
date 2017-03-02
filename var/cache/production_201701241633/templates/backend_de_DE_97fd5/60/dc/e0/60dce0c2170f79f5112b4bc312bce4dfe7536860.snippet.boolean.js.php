<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:10
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\component\element\boolean.js" */ ?>
<?php /*%%SmartyHeaderCode:1409358b848ce643e59-16233567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60dce0c2170f79f5112b4bc312bce4dfe7536860' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\component\\element\\boolean.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1409358b848ce643e59-16233567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848ce65f3d6_65673671',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848ce65f3d6_65673671')) {function content_58b848ce65f3d6_65673671($_smarty_tpl) {?>/*
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
 * @category   Shopware
 * @package    Base
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */
Ext.define('Shopware.apps.Base.view.element.Boolean', {
    extend: 'Ext.form.field.Checkbox',
    alias: [
        'widget.base-element-boolean',
        'widget.base-element-checkbox'
    ],
    inputValue: true,
    uncheckedValue:false,

    initComponent: function () {
        var me = this;

        if(me.value) {
            me.setValue(!!me.value);
        }

        // Move support text to box label
        if(me.supportText) {
            me.boxLabel = me.supportText;
            delete me.supportText;
        } else if(me.helpText) {
            me.boxLabel = me.helpText;
            delete me.helpText;
        }

        me.callParent(arguments);
    }
});
<?php }} ?>