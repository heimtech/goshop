<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:32
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\order\store\list_batch.js" */ ?>
<?php /*%%SmartyHeaderCode:2251558b848e49b6b55-58093117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43ee0acd384abc50b698b38519bd8165b511a340' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\order\\store\\list_batch.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2251558b848e49b6b55-58093117',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848e49d5f58_59148154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848e49d5f58_59148154')) {function content_58b848e49d5f58_59148154($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage DetailBatch
 * @version    $Id$
 * @author     Daniel Nögel
 * @author     $Author$
 */

/**
 * Shopware Store - Article Module
 *
 * The batch store of the order module is responsible to initial
 * all global stores of the detail page which used for the data selection.
 */
//
Ext.define('Shopware.apps.Order.store.ListBatch', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',
    /**
     * to upload all selected items in one request
     * @boolean
     */
    batch:true,
    autoLoad: false,
    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Order.model.ListBatch'
});
//

<?php }} ?>