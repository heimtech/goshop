<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:34:34
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\theme\model\layout.js" */ ?>
<?php /*%%SmartyHeaderCode:3041758b8499ae8cfd4-42326100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f672994531b8aad85369ae9473c811a9bea69d0' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\theme\\model\\layout.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3041758b8499ae8cfd4-42326100',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b8499aecf658_38864882',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8499aecf658_38864882')) {function content_58b8499aecf658_38864882($_smarty_tpl) {?>/**
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
 */

/**
 * Shopware Application
 *
 * @category  Shopware
 * @package   Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */

//

//

Ext.define('Shopware.apps.Theme.model.Layout', {
    extend: 'Ext.data.Model',

    fields: [
        { name: 'id', type: 'int', useNull: true },
        { name: 'type', type: 'string' },
        { name: 'title', type: 'string' },
        { name: 'name', type: 'string' },
        { name: 'attributes' },

        //mapping fields which used only for the form field generation
        { name: 'xtype', type: 'string', mapping: 'type' },
        { name: 'containerId', type: 'int', mapping: 'id' }
    ],

    associations: [
        {
            type: 'hasMany',
            model: 'Shopware.apps.Theme.model.Element',
            name: 'getElements',
            associationKey: 'elements'
        },
        {
            type: 'hasMany',
            model: 'Shopware.apps.Theme.model.Layout',
            name: 'getChildren',
            associationKey: 'children'
        }
    ]
});


//
<?php }} ?>