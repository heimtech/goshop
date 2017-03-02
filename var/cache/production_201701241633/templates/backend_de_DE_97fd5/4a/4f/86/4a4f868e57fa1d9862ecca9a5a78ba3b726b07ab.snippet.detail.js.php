<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:30
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\customer\store\detail.js" */ ?>
<?php /*%%SmartyHeaderCode:3189058b848e24c8fd9-04338826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a4f868e57fa1d9862ecca9a5a78ba3b726b07ab' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\customer\\store\\detail.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3189058b848e24c8fd9-04338826',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848e24e83d5_03248831',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848e24e83d5_03248831')) {function content_58b848e24e83d5_03248831($_smarty_tpl) {?>/**
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
 * @package    Customer
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Customer list backend module.
 *
 * The detail store is used for the customer detail page and allows the user
 * to edit or add customers.
 */
//
Ext.define('Shopware.apps.Customer.store.Detail', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',
    /**
     * Disable auto loading
     * @boolean
     */
    autoLoad:false,
    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Customer.model.Customer'
});
//
<?php }} ?>