<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:03
         compiled from "C:\wamp64\www\goshop\engine\Library\ExtJs\overrides\Ext.Timeout.js" */ ?>
<?php /*%%SmartyHeaderCode:1831858b848c7e5e1d1-18273691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6af32bb76376ef64d74b98b14024c66521f1586a' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\engine\\Library\\ExtJs\\overrides\\Ext.Timeout.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1831858b848c7e5e1d1-18273691',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848c7e8cfd8_81488401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848c7e8cfd8_81488401')) {function content_58b848c7e8cfd8_81488401($_smarty_tpl) {?>/**
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

var ajaxTimeout = <?php echo 30;?>;

if (ajaxTimeout >= 6) {
    Ext.Ajax.timeout= ajaxTimeout * 1000;

    Ext.override(Ext.form.Basic,
        { timeout: ajaxTimeout }
    );
    Ext.override(Ext.data.proxy.Server,
        { timeout: Ext.Ajax.timeout }
    );
    Ext.override(Ext.data.Connection,
        { timeout: Ext.Ajax.timeout }
    );
}
<?php }} ?>