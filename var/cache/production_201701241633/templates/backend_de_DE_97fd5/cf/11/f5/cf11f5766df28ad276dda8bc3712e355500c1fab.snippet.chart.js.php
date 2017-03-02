<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:25
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\customer\model\chart.js" */ ?>
<?php /*%%SmartyHeaderCode:585858b848dddd5650-56867061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf11f5766df28ad276dda8bc3712e355500c1fab' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\customer\\model\\chart.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '585858b848dddd5650-56867061',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848dde852d2_13050627',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848dde852d2_13050627')) {function content_58b848dde852d2_13050627($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Customer list backend module.
 *
 * The chart model used for the order chart which displayed on top of the
 * order tab within the customer detail page.
 */
//
Ext.define('Shopware.apps.Customer.model.Chart', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'amount', type:'float' },
        { name:'date', type:'date', dateFormat:'Y-m-d' }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api:{
            read:'<?php echo '/goshop/backend/customer/getOrderChart';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data'
        }
    }

});
//
<?php }} ?>