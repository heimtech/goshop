<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:27
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\article\model\download.js" */ ?>
<?php /*%%SmartyHeaderCode:2482058b848df2b5bd6-16529129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b8cf6d3da73bad7e37897fb98e7169f86ca99da' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\article\\model\\download.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2482058b848df2b5bd6-16529129',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848df388ad8_89598956',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848df388ad8_89598956')) {function content_58b848df388ad8_89598956($_smarty_tpl) {?>/**
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
 * Shopware Model - Article backend module.
 *
 * @link http://www.shopware.de/
 * @license http://www.shopware.de/license
 * @package Article
 * @subpackage Detail
 */
//
Ext.define('Shopware.apps.Article.model.Download', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'articleId', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'file', type: 'string' },
        { name: 'size', type: 'float' }
    ]
});
//
<?php }} ?>