<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:07
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\model\customer.js" */ ?>
<?php /*%%SmartyHeaderCode:417258b848cb66edd8-88277489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b9525f695a95bd740df067a8b54856d137029a8' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\model\\customer.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '417258b848cb66edd8-88277489',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cb6d46d3_38194877',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cb6d46d3_38194877')) {function content_58b848cb6d46d3_38194877($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The customer model contains all fields for a single shopware customer.
 */
//
Ext.define('Shopware.apps.Base.model.Customer', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Customer',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type:'int' },
        { name:'groupKey', type:'string' },
        { name:'email', type:'string' },
        { name:'active', type:'boolean' },
        { name:'accountMode', type:'int' },
        { name:'confirmationKey', type:'string' },
        { name:'paymentId', type:'int', useNull: true },
        { name:'firstLogin', type:'date' },
        { name:'lastLogin', type:'date' },
        { name:'newsletter', type:'int' },
        { name:'validation', type:'int' },
        { name:'languageId', type:'int' },
        { name:'shopId', type:'int', useNull: true },
        { name:'priceGroupId', type:'int' },
        { name:'internalComment', type:'string' },
        { name:'failedLogins', type:'int' },
        { name:'referer', type:'string' },
        { name:'default_billing_address_id', type:'int', useNull: true },
        { name:'default_shipping_address_id', type:'int', useNull: true }
    ]

});
//


<?php }} ?>