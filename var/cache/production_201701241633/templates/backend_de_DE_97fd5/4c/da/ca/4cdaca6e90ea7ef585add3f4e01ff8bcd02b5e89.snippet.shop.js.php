<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:08
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\store\shop.js" */ ?>
<?php /*%%SmartyHeaderCode:1036958b848cc01dad8-57147925%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cdaca6e90ea7ef585add3f4e01ff8bcd02b5e89' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\store\\shop.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1036958b848cc01dad8-57147925',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cc03ced7_37326455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cc03ced7_37326455')) {function content_58b848cc03ced7_37326455($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.Shop', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.Shop',
    storeId: 'base.Shop',
    model : 'Shopware.apps.Base.model.Shop',
    pageSize: 1000,

    remoteSort: true,
    remoteFilter: true,

    proxy:{
        type:'ajax',
        url: '<?php echo '/goshop/backend/base/getShops';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    },

    filters: [{
        property: 'main',
        value: null
    }]
}).create();

<?php }} ?>