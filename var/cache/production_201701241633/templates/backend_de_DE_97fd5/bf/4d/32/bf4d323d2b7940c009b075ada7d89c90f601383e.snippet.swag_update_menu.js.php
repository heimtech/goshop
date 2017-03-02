<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:21
         compiled from "C:\wamp64\www\goshop\engine\Shopware\Plugins\Default\Backend\SwagUpdate\Views\backend\index\view\swag_update_menu.js" */ ?>
<?php /*%%SmartyHeaderCode:1253358b848d980ced4-13352815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf4d323d2b7940c009b075ada7d89c90f601383e' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\engine\\Shopware\\Plugins\\Default\\Backend\\SwagUpdate\\Views\\backend\\index\\view\\swag_update_menu.js',
      1 => 1485272022,
      2 => 'file',
    ),
    '27cd2c89c6cb0235247f6da482f9cc536031efd1' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\index\\store\\news_local.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1253358b848d980ced4-13352815',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848d98ad158_27001346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848d98ad158_27001346')) {function content_58b848d98ad158_27001346($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Index.store.NewsLocal', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Index.model.News',
    autoLoad: true,
    proxy: {
        type: 'localstorage',
        id: 'widget-settings-shopware-news-cache-<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'backend/index/store/news_local','name'=>'script'/'ext'/'lang','default'=>'en_GB')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'backend/index/store/news_local','name'=>'script'/'ext'/'lang','default'=>'en_GB'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
de<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'backend/index/store/news_local','name'=>'script'/'ext'/'lang','default'=>'en_GB'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    }
});
//
<?php }} ?>