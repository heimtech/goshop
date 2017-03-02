<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:07
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\model\tax.js" */ ?>
<?php /*%%SmartyHeaderCode:1858158b848cb6ff658-25567047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18ff771ca603f9392b0d53cfc4fe6fac0af52813' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\model\\tax.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858158b848cb6ff658-25567047',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cb7322d2_36486742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cb7322d2_36486742')) {function content_58b848cb7322d2_36486742($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 * The shop model represents a data row of the s_core_tax or the
 * Shopware\Models\Article\Tax doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.Tax', {
    /**
     * Defines an alternate name for this class.
     */
    alternateClassName:'Shopware.model.Tax',

    /**
     * Extends the standard ExtJS Model
     * @string
     */
    extend : 'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty:'id',

    /**
     * The fields used for this model
     * @array
     */
    fields : [
        //
        { name : 'id',  type: 'integer' },
        { name : 'tax',type: 'float' },
        { name : 'name',type: 'string' }
    ]
});
//
<?php }} ?>