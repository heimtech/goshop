<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:36
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\article\store\option.js" */ ?>
<?php /*%%SmartyHeaderCode:732958b848e885b0d7-57373471%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e28d8d9b22812e0ea51848a9a0a311720b072df4' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\article\\store\\option.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '732958b848e885b0d7-57373471',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848e888dd57_05635870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848e888dd57_05635870')) {function content_58b848e888dd57_05635870($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Batch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Article Module
 */
//
Ext.define('Shopware.apps.Article.store.Option', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',

    autoLoad: false,
    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Article.model.ConfiguratorOption',
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
        api: {
            create: '<?php echo '/goshop/backend/Article/saveConfiguratorOption';?>'
        },
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }

});
//

<?php }} ?>