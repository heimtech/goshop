<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:25
         compiled from "C:\wamp64\www\goshop\engine\Shopware\Plugins\Default\Backend\SwagUpdate\Views\backend\index\view\swag_update_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:1665258b848ddd8b2d9-39454718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24a99f94dd630ce3d9e683d4366c76ad77f17797' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\engine\\Shopware\\Plugins\\Default\\Backend\\SwagUpdate\\Views\\backend\\index\\view\\swag_update_menu.js',
      1 => 1485272022,
      2 => 'file',
    ),
    '9c53554bdbeaf666120d74bd4ac2ad3204c877b0' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\index\\store\\news.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1665258b848ddd8b2d9-39454718',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848ddea8551_95248376',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848ddea8551_95248376')) {function content_58b848ddea8551_95248376($_smarty_tpl) {?>/**
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

//
Ext.define('Shopware.apps.Index.store.News', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Index.model.News',
    remoteFilter: true,
    clearOnLoad: true,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/goshop/backend/widgets/getShopwareNews';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>