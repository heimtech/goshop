<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:08
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\component\Shopware.button.HoverButton.js" */ ?>
<?php /*%%SmartyHeaderCode:229158b848cc84b6d1-62538271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01c462a131de5108e38e5e1b3e1c1dc414576081' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\component\\Shopware.button.HoverButton.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '229158b848cc84b6d1-62538271',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848cc862dd1_12402079',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848cc862dd1_12402079')) {function content_58b848cc862dd1_12402079($_smarty_tpl) {?>/**
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
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Hover Button
 *
 * This components represents a hover button which
 * is primarily for the top menu.
 *
 * It allows to open up the underlying menu's through
 * the mouseover event.
 */
Ext.define('Shopware.button.HoverButton', {
    extend: 'Ext.button.Button',
    alias: 'widget.hoverbutton',

    /**
     * Special ExtJS 4.1 method which will be called
     * when the element is rendered.
     *
     * This method sets a new event listener on the
     * button's DOM element.
     *
     * @private
     * @return void
     */
    afterRender: function() {
        var me = this;
        me.callParent(arguments);
        me.getEl().on('mouseover', me.onClick, me);
    },

    /**
     * Event listener method which will be called when
     * the user hovers the button.
     *
     * Opens the underlying menu and fires the corresponding
     * event handler.
     *
     * @event mouseover
     * @param [object] event - Ext.EventImpl
     * @return void
     */
    onClick: function(event) {
        var me = this;
        if (me.preventDefault || (me.disabled && me.getHref()) && event) {
            event.preventDefault();
        }

        if(!me.disabled) {
            me.doToggle();
            me.maybeShowMenu();
            me.fireHandler(event);
        }
    }
});
<?php }} ?>