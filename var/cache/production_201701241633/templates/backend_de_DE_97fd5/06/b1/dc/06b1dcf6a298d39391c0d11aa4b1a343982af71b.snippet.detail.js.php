<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:30
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\article_list\store\detail.js" */ ?>
<?php /*%%SmartyHeaderCode:2005358b848e25b7457-53231300%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06b1dcf6a298d39391c0d11aa4b1a343982af71b' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\article_list\\store\\detail.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2005358b848e25b7457-53231300',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848e25f9ad8_36354239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848e25f9ad8_36354239')) {function content_58b848e25f9ad8_36354239($_smarty_tpl) {?>/**
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
 */

/**
 * Shopware Store - Detail store
 *
 * The detail store contains all defined shop articles.
 */
Ext.define('Shopware.apps.ArticleList.store.Detail', {

    /**
     * Define that this component is an extension of the Ext.data.Store
     */
    extend: 'Ext.data.Store',

    /**
     * Define unique store id to create the store by the store manager
     */
    storeId: 'multiEdit.Detail',

    /**
     * Define how much rows loaded with one request
     */
    pageSize: 25,

   /**
    * Auto load the store after the component
    * is initialized
    * @boolean
    */
    autoLoad: false,

    remoteSort: true,

    remoteFilter: false,

   /**
    * Define the used model for this store
    * @string
    */
    model : 'Shopware.apps.ArticleList.model.Detail',

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url:'<?php echo '/goshop/backend/ArticleList/filter';?>',

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


<?php }} ?>