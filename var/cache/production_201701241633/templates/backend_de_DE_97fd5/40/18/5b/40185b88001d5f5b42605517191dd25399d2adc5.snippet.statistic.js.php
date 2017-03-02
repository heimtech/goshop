<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:27
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\article\model\statistic.js" */ ?>
<?php /*%%SmartyHeaderCode:2569958b848df764f58-94540368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40185b88001d5f5b42605517191dd25399d2adc5' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\article\\model\\statistic.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2569958b848df764f58-94540368',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848df83fb54_49866265',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848df83fb54_49866265')) {function content_58b848df83fb54_49866265($_smarty_tpl) {?>/**
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
 * @subpackage Statistic
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.Statistic', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used  for this model
     * @array
     */
    fields: [
        //
        { name: 'name' },
        { name: 'groupdate' },
        { name: 'month',  type: 'integer'},
        { name: 'revenue', type: 'float' },
        { name: 'orders', type: 'integer' },
        { name: 'date', type: 'date', dateFormat: 'Y-m-d' }
    ]
});
//
<?php }} ?>