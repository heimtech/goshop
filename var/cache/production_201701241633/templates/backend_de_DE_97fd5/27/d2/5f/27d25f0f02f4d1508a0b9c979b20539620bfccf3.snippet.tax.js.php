<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:08
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\store\tax.js" */ ?>
<?php /*%%SmartyHeaderCode:938858b848cc346453-95336905%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27d25f0f02f4d1508a0b9c979b20539620bfccf3' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\store\\tax.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '938858b848cc346453-95336905',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cc365856_58418364',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cc365856_58418364')) {function content_58b848cc365856_58418364($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Base.store.Tax', {
    extend : 'Ext.data.Store',

    alternateClassName: 'Shopware.store.Tax',
    storeId: 'base.Tax',
    model : 'Shopware.apps.Base.model.Tax',
    pageSize: 1000,
    remoteFilter: true,

    proxy:{
        type:'ajax',
        url:'<?php echo '/goshop/backend/base/getTaxes';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
<?php }} ?>