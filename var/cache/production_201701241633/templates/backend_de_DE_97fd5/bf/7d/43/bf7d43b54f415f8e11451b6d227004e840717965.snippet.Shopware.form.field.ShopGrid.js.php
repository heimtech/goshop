<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:12
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\attribute\field\Shopware.form.field.ShopGrid.js" */ ?>
<?php /*%%SmartyHeaderCode:532158b848d0ad7c52-16590126%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf7d43b54f415f8e11451b6d227004e840717965' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\attribute\\field\\Shopware.form.field.ShopGrid.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '532158b848d0ad7c52-16590126',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848d0b16452_53439499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848d0b16452_53439499')) {function content_58b848d0b16452_53439499($_smarty_tpl) {?>/**
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
 * @category    Shopware
 * @package     Base
 * @subpackage  Attribute
 * @version     $Id$
 * @author      shopware AG
 */

//

Ext.define('Shopware.form.field.ShopGrid', {
    extend: 'Shopware.form.field.Grid',
    alias: 'widget.shopware-form-field-shop-grid',
    mixins: ['Shopware.model.Helper'],

    createColumns: function() {
        var me = this;
        var activeColumn = { dataIndex: 'active', width: 30 };
        me.applyBooleanColumnConfig(activeColumn);

        return [
            me.createSortingColumn(),
            activeColumn,
            { dataIndex: 'name', flex: 1 },
            { dataIndex: 'basePath', width: 90 },
            { dataIndex: 'category', flex: 1,renderer: me.categoryRenderer },
            me.createActionColumn()
        ];
    },

    categoryRenderer: function(value) {
        return '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"shop/grid/category_label",'default'=>'Category','namespace'=>'backend/attributes/fields')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"shop/grid/category_label",'default'=>'Category','namespace'=>'backend/attributes/fields'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Kategorie<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"shop/grid/category_label",'default'=>'Category','namespace'=>'backend/attributes/fields'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
: ' + value;
    }
});<?php }} ?>