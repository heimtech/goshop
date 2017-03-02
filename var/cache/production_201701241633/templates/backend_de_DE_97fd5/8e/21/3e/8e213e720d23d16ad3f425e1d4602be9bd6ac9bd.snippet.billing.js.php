<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:25
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\order\model\billing.js" */ ?>
<?php /*%%SmartyHeaderCode:2179258b848ddde5050-28786325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e213e720d23d16ad3f425e1d4602be9bd6ac9bd' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\order\\model\\billing.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2179258b848ddde5050-28786325',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848dde65ed8_13157607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848dde65ed8_13157607')) {function content_58b848dde65ed8_13157607($_smarty_tpl) {?>/**
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
 *
 * The billing model represents a single row of the s_order_billingaddress and belongs to
 * the order model which is defined in backend/order/model/order.js.
 * The order billing model is an simple extension of the global standard billingAddress model
 * which contains all required fields for an billing address.
 */
//
Ext.define('Shopware.apps.Order.model.Billing', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.apps.Base.model.BillingAddress',
    /**
     * One or more BelongsTo associations for this model.
     * @string
     */
    belongsTo: 'Shopware.apps.Order.model.Order',
    /**
     * Extends the models fields with the order id field.
     * @array
     */
    fields: [
        //
        { name: 'orderId', type: 'int' },
        { name: 'stateId', type:'int', useNull: true }
    ]
});
//

<?php }} ?>