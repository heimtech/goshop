<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:26
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\order\model\receipt.js" */ ?>
<?php /*%%SmartyHeaderCode:1029658b848de624a55-12043922%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96f9dbc4d3ecd8f75beee5c0644c16a3c3b03bc8' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\order\\model\\receipt.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1029658b848de624a55-12043922',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848de6efc53_59557364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848de6efc53_59557364')) {function content_58b848de6efc53_59557364($_smarty_tpl) {?>/**
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
 * The list model represents a single row for the order list grid.
 * The model data are concat by the different order associations.
 */
//
Ext.define('Shopware.apps.Order.model.Receipt', {

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
        { name: 'id', type:'int' },
        { name: 'date', type:'date' },
        { name: 'typeId', type:'int' },
        { name: 'customerId', type:'int' },
        { name: 'orderId', type:'int' },
        { name: 'amount', type:'float' },
        { name: 'documentId', type:'int' },
        { name: 'hash', type:'string' },
        { name: 'typeName', type:'string' }
    ],
    /**
     * @array
     */
    associations:[
        { type:'hasMany', model:'Shopware.apps.Base.model.DocType', name:'getDocType', associationKey:'type' }
    ]

});
//
<?php }} ?>