<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:34:33
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\theme\app.js" */ ?>
<?php /*%%SmartyHeaderCode:1191458b849999d5f50-19800142%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa5538d6b9d81c6c582e67aaf1ec6e594946ef17' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\theme\\app.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1191458b849999d5f50-19800142',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b84999a2fcd8_02368043',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b84999a2fcd8_02368043')) {function content_58b84999a2fcd8_02368043($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme', {
    extend: 'Enlight.app.SubApplication',

    name:'Shopware.apps.Theme',

    loadPath: '<?php echo '/goshop/backend/Theme/load';?>',
    bulkLoad: true,

    controllers: [ 'List', 'Detail', 'Settings' ],

    views: [
        'list.Window',
        'list.Theme',
        'list.extensions.Info',

        'detail.Theme',
        'detail.Window',

        'create.Window',

        'config_sets.Window',

        'detail.containers.Tab',
        'detail.containers.TabPanel',
        'detail.containers.FieldSet',

        'detail.fields.Suffix',
        'detail.fields.PixelField',
        'detail.fields.CheckboxField',
        'detail.fields.ColorPicker',
        'detail.fields.DateField',
        'detail.fields.EmField',
        'detail.fields.MediaSelection',
        'detail.fields.PercentField',
        'detail.fields.TextAreaField',
        'detail.fields.TextField',
        'detail.fields.SelectField',

        'settings.Window',
        'settings.Settings'
    ],

    models: [ 'Theme', 'Element', 'ConfigValue', 'Layout', 'ConfigSet', 'Settings' ],
    stores: [ 'Theme', 'ConfigSets' ],

    launch: function() {
        return this.getController('List').mainWindow;
    }
});

//
<?php }} ?>