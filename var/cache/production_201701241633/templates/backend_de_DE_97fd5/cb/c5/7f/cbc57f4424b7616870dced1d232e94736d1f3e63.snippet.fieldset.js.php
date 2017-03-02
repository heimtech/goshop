<?php /* Smarty version Smarty-3.1.12, created on 2017-03-02 17:31:10
         compiled from "C:\wamp64\www\goshop\themes\Backend\ExtJs\backend\base\component\element\fieldset.js" */ ?>
<?php /*%%SmartyHeaderCode:491158b848ce891bd4-71999101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbc57f4424b7616870dced1d232e94736d1f3e63' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Backend\\ExtJs\\backend\\base\\component\\element\\fieldset.js',
      1 => 1485272022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '491158b848ce891bd4-71999101',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58b848ce8b0fd6_01679672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58b848ce8b0fd6_01679672')) {function content_58b848ce8b0fd6_01679672($_smarty_tpl) {?>/**
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
//
//
Ext.define('Shopware.apps.Base.view.element.Fieldset', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.base-element-fieldset',

    bodyPadding: 10,
    border: false,

    layout: 'form',
    defaults: {
        anchor: '100%',
        labelWidth: 250,
        hideEmptyLabel: false
    },

    /**
     * Initialize the component.
     *
     * @public
     * @return void
     */
    initComponent:function () {
        var me = this;

        me.callParent(arguments);
    }
});
//
<?php }} ?>