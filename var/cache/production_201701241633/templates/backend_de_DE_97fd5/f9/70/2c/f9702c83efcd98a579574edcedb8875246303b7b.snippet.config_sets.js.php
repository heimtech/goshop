<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:34:36
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\theme\store\config_sets.js" */ ?>
<?php /*%%SmartyHeaderCode:1367658b8499c0dd158-11711900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9702c83efcd98a579574edcedb8875246303b7b' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\theme\\store\\config_sets.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1367658b8499c0dd158-11711900',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b8499c10bf52_16618038',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8499c10bf52_16618038')) {function content_58b8499c10bf52_16618038($_smarty_tpl) {?>/**
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
 * Shopware Application
 *
 * @category  Shopware
 * @package   Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */

//

//

Ext.define('Shopware.apps.Theme.store.ConfigSets', {
    extend:'Ext.data.Store',
    model: 'Shopware.apps.Theme.model.Theme',

    proxy: {
        type: 'ajax',
        url: '<?php echo '/goshop/backend/theme/getConfigSets';?>',
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
});

//

<?php }} ?>