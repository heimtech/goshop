<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:30
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\customer\store\list.js" */ ?>
<?php /*%%SmartyHeaderCode:1392358b848e2513353-39457646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39c92534071c6b006029f0acf51d7325ef712414' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\customer\\store\\list.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1392358b848e2513353-39457646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848e2532753_46290331',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848e2532753_46290331')) {function content_58b848e2532753_46290331($_smarty_tpl) {?>/**
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
 * Shopware Store - Customer list backend module
 *
 * The list store is used from the customer list grid.
 */
//
Ext.define('Shopware.apps.Customer.store.List', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',
    /**
     * Auto load the store after the component is initialized
     * @boolean
     */
    autoLoad:false,
    /**
     * Enable remote sort.
     * @boolean
     */
    remoteSort:true,
    /**
     * Enable remote filtering
     * @boolean
     */
    remoteFilter:true,
    /**
     * Amount of data loaded at once
     * @integer
     */
    pageSize:15,
    /**
     * to upload all selected items in one request
     * @boolean
     */
    batch:true,
    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Customer.model.List'
});
//

<?php }} ?>