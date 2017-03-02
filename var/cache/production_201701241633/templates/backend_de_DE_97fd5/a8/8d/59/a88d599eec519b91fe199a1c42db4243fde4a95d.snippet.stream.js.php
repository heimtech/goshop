<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:28
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\article\model\stream.js" */ ?>
<?php /*%%SmartyHeaderCode:264158b848e09b2cd6-97287416%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a88d599eec519b91fe199a1c42db4243fde4a95d' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\article\\model\\stream.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '264158b848e09b2cd6-97287416',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848e0a4f0d9_12446346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848e0a4f0d9_12446346')) {function content_58b848e0a4f0d9_12446346($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Category
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Article.model.Stream', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
        //
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'description', type: 'string' }
    ]
});
//<?php }} ?>