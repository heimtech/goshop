<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:26
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\order\model\dispatch.js" */ ?>
<?php /*%%SmartyHeaderCode:2772558b848decdb655-86576155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f22844d1dbec12549d6adc337808d4677119222' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\order\\model\\dispatch.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2772558b848decdb655-86576155',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848ded259d4_14965268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848ded259d4_14965268')) {function content_58b848ded259d4_14965268($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 *
 * The dispatch model of the order model is an simple extension of the global standard dispatch model.
 * The difference to standard model is the definition of the proxy. The standard model
 * needs a proxy to load the model data for combo boxes or something else. The order
 * dispatch model is only used for the order-dispatch association.
 */
//
Ext.define('Shopware.apps.Order.model.Dispatch', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Shopware.apps.Base.model.Dispatch',

    /**
     * One or more BelongsTo associations for this model.
     * @string
     */
    belongsTo: 'Shopware.apps.Order.model.Order'
});
//

<?php }} ?>