<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:32
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\order\store\tax.js" */ ?>
<?php /*%%SmartyHeaderCode:542158b848e48dbf52-34491368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eaae5152d18933665d75569f54609a45e83adf1' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\order\\store\\tax.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '542158b848e48dbf52-34491368',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848e49168d2_85294733',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848e49168d2_85294733')) {function content_58b848e49168d2_85294733($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Order list backend module
 *
 * The list store is used from the order list grid.
 */
//
Ext.define('Shopware.apps.Order.store.Tax', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',
    /**
     * Auto load the store after the component is initialized
     * @boolean
     */
    autoLoad:false,

    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Order.model.Tax'
});
//

<?php }} ?>