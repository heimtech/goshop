<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:08
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\store\form.js" */ ?>
<?php /*%%SmartyHeaderCode:2447258b848cc4924d2-62927736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b3a369fd6cd83678cac0fbad438610636ba6e7' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\store\\form.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2447258b848cc4924d2-62927736',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cc4f7dd6_77408700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cc4f7dd6_77408700')) {function content_58b848cc4f7dd6_77408700($_smarty_tpl) {?>/**
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
 * @package    Shopware_Base
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.Base.store.Form', {
    extend: 'Ext.data.Store',
    alternateClassName: 'Shopware.store.Form',
    storeId: 'base.Form',

    model:'Shopware.apps.Base.model.Form',
    proxy: {
        type: 'ajax',
        url: '<?php echo '/goshop/backend/config/getForm';?>',
        api: {
            create: '<?php echo '/goshop/backend/config/saveForm';?>',
            update: '<?php echo '/goshop/backend/config/saveForm';?>',
            destroy: '<?php echo '/goshop/backend/config/deleteForm';?>'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>