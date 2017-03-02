<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:16
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\index\model\merchant_mail.js" */ ?>
<?php /*%%SmartyHeaderCode:2321458b848d48e3c56-17981749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4028b6891be85b80c80eef0553aee6ef2d8a729' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\index\\model\\merchant_mail.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2321458b848d48e3c56-17981749',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848d490ad56_19964595',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848d490ad56_19964595')) {function content_58b848d490ad56_19964595($_smarty_tpl) {?>/**
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
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Index.model.MerchantMail', {
    extend: 'Ext.data.Model',
    fields: [
        //
        'content', 'fromMail', 'fromName', 'subject', 'toMail', 'userId', 'status' ]
});
//
<?php }} ?>