<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:08
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\store\position_status.js" */ ?>
<?php /*%%SmartyHeaderCode:1329758b848cc522d53-53542455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae65127dbb81682c70c53c627410312c9b80af9e' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\store\\position_status.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1329758b848cc522d53-53542455',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cc53e2d8_20312000',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cc53e2d8_20312000')) {function content_58b848cc53e2d8_20312000($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.PositionStatus', {
    /**
     * Define that this component is an extension of the Ext.data.Store
     */
    extend: 'Ext.data.Store',
   /**
    * Auto load the store after the component
    * is initialized
    * @boolean
    */
    autoLoad: false,

    /**
     * Define the used model for this store
     * @string
     */
    model : 'Shopware.apps.Base.model.PositionStatus',
    alternateClassName: 'Shopware.store.PositionStatus',
    storeId: 'base.PositionStatus',
    pageSize: 1000,
    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url:'<?php echo '/goshop/backend/base/getDetailStatus';?>',

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }

});

<?php }} ?>