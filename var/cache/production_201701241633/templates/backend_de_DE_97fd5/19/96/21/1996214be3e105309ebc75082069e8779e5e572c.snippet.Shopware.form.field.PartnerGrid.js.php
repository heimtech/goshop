<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:11
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\attribute\field\Shopware.form.field.PartnerGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:1936058b848cfca0cd4-56224797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1996214be3e105309ebc75082069e8779e5e572c' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\attribute\\field\\Shopware.form.field.PartnerGrid.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1936058b848cfca0cd4-56224797',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cfcc00d5_94870479',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cfcc00d5_94870479')) {function content_58b848cfcc00d5_94870479($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.PartnerGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-partner-grid',
    mixins: ['Shopware.model.Helper'],

    createColumns: function() {
        var me = this;

        var activeColumn = { dataIndex: 'active', width: 30 };
        me.applyBooleanColumnConfig(activeColumn);

        return [
            me.createSortingColumn(),
            activeColumn,
            { dataIndex: 'idCode'},
            { dataIndex: 'company', flex: 1 },
            { dataIndex: 'email', flex: 1 },
            me.createActionColumn()
        ];
    },

    createSearchField: function() {
        return Ext.create('Shopware.form.field.PartnerSingleSelection', this.getComboConfig());
    }
});<?php }} ?>