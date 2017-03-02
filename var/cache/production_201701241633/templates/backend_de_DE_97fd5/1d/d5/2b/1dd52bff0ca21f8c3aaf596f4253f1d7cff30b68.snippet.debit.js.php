<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:26
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\order\model\debit.js" */ ?>
<?php /*%%SmartyHeaderCode:2239958b848de10bf53-41663609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dd52bff0ca21f8c3aaf596f4253f1d7cff30b68' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\order\\model\\debit.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2239958b848de10bf53-41663609',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848de1a0651_93160643',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848de1a0651_93160643')) {function content_58b848de1a0651_93160643($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 */
//
Ext.define('Shopware.apps.Order.model.Debit', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * Extends the models fields with the order id field.
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'customerId', type: 'int', useNull: true },
        { name: 'account', type:'string' },
        { name: 'bankCode', type:'string' },
        { name: 'bankName', type:'string' },
        { name: 'accountHolder', type:'string' }
    ]
});
//

<?php }} ?>