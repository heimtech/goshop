<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:08
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\store\template.js" */ ?>
<?php /*%%SmartyHeaderCode:1368558b848cc3907d8-80977591%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10eac224957db280a7c6670b9718bec0c39a2c9a' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\store\\template.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1368558b848cc3907d8-80977591',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cc3abd53_02716716',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cc3abd53_02716716')) {function content_58b848cc3abd53_02716716($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Base.store.Template', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.Template',
    storeId: 'base.Template',
    model : 'Shopware.apps.Base.model.Template',
    pageSize: 1000,

    proxy: {
        type: 'ajax',
        url: '<?php echo '/goshop/backend/base/getTemplates';?>',
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
}).create();
<?php }} ?>