<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:36
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\article\store\property.js" */ ?>
<?php /*%%SmartyHeaderCode:425458b848e8c624d3-45628213%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4528ed4d1de786f88b160692b0bd941527d2e0ad' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\article\\store\\property.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '425458b848e8c624d3-45628213',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848e8c9ce55_59013359',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848e8c9ce55_59013359')) {function content_58b848e8c9ce55_59013359($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Article.store.Property', {
    extend: 'Ext.data.Store',
    alias: 'widget.article-store-property',
    model: 'Shopware.apps.Article.model.Property',
    batch: true,
    autoLoad: false,
    proxy: {
        type: 'ajax',
        api: {
            read: '<?php echo '/goshop/backend/Article/getPropertyList';?>',
            update: '<?php echo '/goshop/backend/Article/setPropertyList/targetField/properties';?>'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>