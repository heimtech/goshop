<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:34:35
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\theme\view\settings\window.js" */ ?>
<?php /*%%SmartyHeaderCode:2776958b8499bdecd56-47633565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4784643a9f7a10ba21815e7e4db8eb1f9a63965' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\theme\\view\\settings\\window.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2776958b8499bdecd56-47633565',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b8499be276d8_47567853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8499be276d8_47567853')) {function content_58b8499be276d8_47567853($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.apps.Theme.view.settings.Window', {
    extend: 'Shopware.window.Detail',
    alias: 'widget.theme-settings-window',
    title : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'settings_window','default'=>'System configuration','namespace'=>'backend/theme/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings_window','default'=>'System configuration','namespace'=>'backend/theme/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
System Konfiguration<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'settings_window','default'=>'System configuration','namespace'=>'backend/theme/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
    height: 365,
    width: 344,
    modal: true
});

//

<?php }} ?>