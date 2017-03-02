<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:12
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\attribute\field\Shopware.form.field.CustomerSingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:718958b848d04ec254-86022834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47897593873cb1995292f5b6718d2596e5bdce03' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\attribute\\field\\Shopware.form.field.CustomerSingleSelection.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '718958b848d04ec254-86022834',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848d050f4d2_43972342',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848d050f4d2_43972342')) {function content_58b848d050f4d2_43972342($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.form.field.CustomerSingleSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-customer-single-selection',

    getComboConfig: function() {
        var me = this;
        var config = me.callParent(arguments);

        config.tpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<tpl if="company">',
                    '<div class="x-boundlist-item"><b>{number}</b> - {firstName} {lastName} ({company}) - <i>{customerGroup}</i></div>',
                '<tpl else>',
                    '<div class="x-boundlist-item"><b>{number}</b> - {firstName} {lastName} - <i>{customerGroup}</i></div>',
                '</tpl>',
            '</tpl>'
        );
        config.displayTpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<tpl if="company">',
                    '{number} - {firstName} {lastName} ({company}) - {customerGroup}',
                '<tpl else>',
                    '{number} - {firstName} {lastName} - {customerGroup}',
                '</tpl>',
            '</tpl>'
        );
        return config;
    }
});<?php }} ?>