<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:36
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\article\store\esd.js" */ ?>
<?php /*%%SmartyHeaderCode:2835858b848e88bcb58-73881264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09ed49b0a63a1053c13cec6201f9c4338c79dccc' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\article\\store\\esd.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2835858b848e88bcb58-73881264',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848e88d4255_58981841',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848e88d4255_58981841')) {function content_58b848e88d4255_58981841($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Article.store.Esd', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',

    autoLoad: false,

    remoteFilter: true,
    remoteSort: true,

    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Article.model.Esd'
});
//

<?php }} ?>