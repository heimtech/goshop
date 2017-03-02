<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:11
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\attribute\field\Shopware.form.field.PartnerSingleSelection.js" */ ?>
<?php /*%%SmartyHeaderCode:904958b848cfceb055-41191855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e401ae6ca02fcb3fef261e9ec9882ef3b27d1b8c' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\attribute\\field\\Shopware.form.field.PartnerSingleSelection.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '904958b848cfceb055-41191855',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cfd02756_28877812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cfd02756_28877812')) {function content_58b848cfd02756_28877812($_smarty_tpl) {?>/**
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

Ext.define('Shopware.form.field.PartnerSingleSelection', {
    extend: 'Shopware.form.field.SingleSelection',
    alias: 'widget.shopware-form-field-partner-single-selection',

    getComboConfig: function() {
        var me = this;
        var config = me.callParent(arguments);

        config.tpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '<div class="x-boundlist-item">{idCode} - <i>{company} / {email}</i></div>',
            '</tpl>'
        );
        config.displayTpl = Ext.create('Ext.XTemplate',
            '<tpl for=".">',
                '{idCode} - {company} / {email}',
            '</tpl>'
        );
        return config;
    }
});<?php }} ?>