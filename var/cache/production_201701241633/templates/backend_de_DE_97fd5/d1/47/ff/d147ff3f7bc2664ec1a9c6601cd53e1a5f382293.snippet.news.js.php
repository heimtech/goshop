<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:16
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\index\model\news.js" */ ?>
<?php /*%%SmartyHeaderCode:1553658b848d4818a54-29253580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd147ff3f7bc2664ec1a9c6601cd53e1a5f382293' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\index\\model\\news.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1553658b848d4818a54-29253580',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848d4857250_97502036',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848d4857250_97502036')) {function content_58b848d4857250_97502036($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Index.model.News', {
    extend: 'Ext.data.Model',
    fields: [
        //
        { name: 'pubDate', type: 'date', dateFormat:'Y-m-dTH:i:s' },
        { name: 'title' },
        { name: 'link' },
        { name: 'linkHash' },
        {
            name: 'visited',
            type: 'boolean',
            convert: function(value, record) {
                var visited = window.localStorage.getItem('widget-settings-shopware-news-cache-visited');
                if (!visited) {
                    return false;
                }

                var visitedLinks = Ext.decode(visited) || {};

                return !!visitedLinks[record.data.linkHash];
            }
        }
    ]
});
//
<?php }} ?>