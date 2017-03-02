<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:17
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\index\store\theme_cache_warm_up.js" */ ?>
<?php /*%%SmartyHeaderCode:1623458b848d5dcd958-24980161%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e7a149ffaf863c27cf6fa088912f91bb60d4928' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\index\\store\\theme_cache_warm_up.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1623458b848d5dcd958-24980161',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848d5dfc759_96835950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848d5dfc759_96835950')) {function content_58b848d5dfc759_96835950($_smarty_tpl) {?>/**
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
 * Theme cache warm up store
 *
 * Loads stores that use themes
 */
//
Ext.define('Shopware.apps.Index.store.ThemeCacheWarmUp', {
    extend: 'Shopware.apps.Base.store.Shop',
    model: 'Shopware.apps.Index.model.ThemeCacheWarmUp',
    remoteFilter: true,
    clearOnLoad: false,

    proxy: {
        type: 'ajax',
        url: '<?php echo '/goshop/backend/base/getShopsWithThemes';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>