<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:27
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\article\model\configurator_option.js" */ ?>
<?php /*%%SmartyHeaderCode:2318058b848dfe17cd5-35171677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6fde37c27da7f7fd6fd11a4e902137bfd8d2dc2f' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\article\\model\\configurator_option.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2318058b848dfe17cd5-35171677',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848e0019c51_87016902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848e0019c51_87016902')) {function content_58b848e0019c51_87016902($_smarty_tpl) {?>/**
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
 * Shopware Model - Article models.
 * The article model contains all data about the article. Additional the model
 * contains the definition of the model associations. The article model
 * contains a proxy to define which request has to been sent to save, update and delete
 * the article.
 */
//
Ext.define('Shopware.apps.Article.model.ConfiguratorOption', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int', useNull: true },
        { name: 'groupId', type: 'int' },
        { name: 'active', type: 'boolean', defaultValue: false },
        { name: 'articleId', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'position', type: 'int' }
    ],

    proxy: {
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
            update: '<?php echo '/goshop/backend/Article/saveConfiguratorOption';?>',
            destroy: '<?php echo '/goshop/backend/Article/deleteConfiguratorOption';?>'
        }
    }
});
//
<?php }} ?>