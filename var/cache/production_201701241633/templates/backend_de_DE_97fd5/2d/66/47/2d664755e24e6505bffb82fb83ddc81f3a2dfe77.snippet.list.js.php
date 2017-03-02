<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:25
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\customer\model\list.js" */ ?>
<?php /*%%SmartyHeaderCode:224458b848ddb50dd8-19198022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d664755e24e6505bffb82fb83ddc81f3a2dfe77' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\customer\\model\\list.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '224458b848ddb50dd8-19198022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848ddc912d2_91279857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848ddc912d2_91279857')) {function content_58b848ddc912d2_91279857($_smarty_tpl) {?>/**
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
 * The list model represents a single row for the customer list grid.
 * The model data are concat by the different customer associations.
 */
//
Ext.define('Shopware.apps.Customer.model.List', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * Unique identifier field
     * @string
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name:'id', type:'int' },
        { name:'number', type:'string' },
        { name:'firstname', type:'string' },
        { name:'lastname', type:'string' },
        { name:'firstLogin', type:'date' },
        { name:'customerGroup', type:'string' },
        { name:'company', type:'string' },
        { name:'zipCode', type:'string' },
        { name:'city', type:'string' },
        { name:'accountMode', type:'int' },
        { name:'orderCount', type:'int' },
        { name:'amount', type:'float' }
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
            read:'<?php echo '/goshop/backend/customer/getList';?>',
            destroy:'<?php echo '/goshop/backend/customer/delete/targetField/customers';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
//
<?php }} ?>