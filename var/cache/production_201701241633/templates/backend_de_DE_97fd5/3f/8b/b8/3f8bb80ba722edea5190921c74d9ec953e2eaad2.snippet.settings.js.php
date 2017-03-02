<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:34:36
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\theme\controller\settings.js" */ ?>
<?php /*%%SmartyHeaderCode:1567558b8499c49a1d5-03519189%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f8bb80ba722edea5190921c74d9ec953e2eaad2' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\theme\\controller\\settings.js',
      1 => 1485272024,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1567558b8499c49a1d5-03519189',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b8499c4dc852_65470663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b8499c4dc852_65470663')) {function content_58b8499c4dc852_65470663($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Theme.controller.Settings', {
    extend: 'Enlight.app.Controller',

    refs: [
        { ref: 'listingWindow', selector: 'theme-list-window' }
    ],

    init: function () {
        var me = this;

        me.control({
            'theme-list-window': {
                'open-settings': me.openSettings
            }
        });

        Shopware.app.Application.on('settings-save-successfully', function(controller, result, window, record) {
            window.destroy();
        });

        me.callParent(arguments);
    },

    openSettings: function() {
        var me = this;

        Ext.create('Shopware.apps.Theme.model.Settings').reload({
            callback: function(record) {
                me.settingsWindow = me.getView('settings.Window').create({
                    record: record
                }).show();
            }
        });
    }
});

//
<?php }} ?>