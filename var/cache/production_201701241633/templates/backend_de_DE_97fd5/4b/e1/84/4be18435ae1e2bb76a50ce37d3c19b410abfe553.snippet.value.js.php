<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:07
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\model\value.js" */ ?>
<?php /*%%SmartyHeaderCode:739658b848cb9a32d9-37477836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4be18435ae1e2bb76a50ce37d3c19b410abfe553' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\model\\value.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '739658b848cb9a32d9-37477836',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cb9d5f56_09125515',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cb9d5f56_09125515')) {function content_58b848cb9d5f56_09125515($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Base.model.Value', {
    extend: 'Ext.data.Model',

    alternateClassName: 'Shopware.model.Value',

    fields: [
        //
        { name: 'id', type: 'int', useNull: true },
        { name: 'shopId', type: 'int' },
        { name: 'value', defaultValue: null, useNull: true }
    ]
});
//
<?php }} ?>