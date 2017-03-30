<?php /* Smarty version Smarty-3.1.12, created on 2017-03-28 16:57:38
         compiled from "C:\wamp64\www\goshop\themes\Frontend\GoShopTheme\widgets\checkout\info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2183658da78c0477713-74710468%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc300095853457fb5e826a8bfc6885b10150bdd5' => 
    array (
      0 => 'C:\\wamp64\\www\\goshop\\themes\\Frontend\\GoShopTheme\\widgets\\checkout\\info.tpl',
      1 => 1490713041,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2183658da78c0477713-74710468',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_58da78c0552312_75035700',
  'variables' => 
  array (
    'sUserLoggedIn' => 0,
    'sBasketQuantity' => 0,
    'sBasketAmount' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58da78c0552312_75035700')) {function content_58da78c0552312_75035700($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include 'C:\\wamp64\\www\\goshop\\engine\\Library\\Enlight\\Template/Plugins\\modifier.currency.php';
?><div class="col-md-3 hidden-sm hidden-xs">

    
<ul>
    <li class="navigation--entry entry--cart" role="menuitem">
        <div id="shopping-cart-wrapper" >
            <a href="<?php echo 'http://localhost/goshop/checkout/cart';?>" class="shp-ca" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Warenkorb";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_tmp1, ENT_QUOTES, 'utf-8', true);?>
" data-toggle="dropdown">
                   <span class="cart--display">
                <?php if ($_smarty_tpl->tpl_vars['sUserLoggedIn']->value){?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'IndexLinkCheckout','namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexLinkCheckout','namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Zur Kasse<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexLinkCheckout','namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php }else{ ?>
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Warenkorb<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                <?php }?>
            </span>

                <div class="s-bag-1">
                    <i class="icon-bag"></i>
                </div>
                <div class="s-cart-pan">
                    <div class="s-bag-2">
                        <span class="dd-products-count"><?php echo $_smarty_tpl->tpl_vars['sBasketQuantity']->value;?>
</span> Artikel / <span class="active dd-products-price"><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sBasketAmount']->value);?>
 </span>
                    </div>
                </div>
            </a>
    </li>
</ul>

        <!-- <div class="dropdown-menu dropdown-menu-right larger text-left" role="menu">
                <span class="dropdown-triangle-up"></span>
                <a href="#" class="dd-close-btn"><i class="icon_close"></i></a>
                <div class="dropdown-head">
                    <h4 class="pull-left">2 items in the shopping bag</h4>
                </div>
                <div class="dd-wrapper">
                    <div class="dd-list-empty">There is no product in shopping cart!</div>
                    <div id="cart-product-group" class="dropdown-product-list">
                        <div class="dd-product-group" id="pr5">
                            <div class="dd-product-box pull-left">
                                <a href="product-page.html" title="product name">
                                    <img src="images/pr_2-small.jpg" alt="product name">
                                </a>
                            </div>
                            <div class="dd-product-desc pull-left">
                                <a class="title">Beautiful Fit Velvet Sweater For Him test for longer header test for longer header</a>
                                <div class="qty">1 x <span class="active">$700.00</span></div>
                                <a href="#" class="close-btn ddr"><i class="icon_close"></i></a>
                            </div>
                        </div>
                        <div class="dd-product-group" id="pr6">
                            <div class="dd-product-box pull-left">
                                <a href="product-page.html" title="product name">
                                    <img src="images/pr_3-small.jpg" alt="product name">
                                </a>
                            </div>
                            <div class="dd-product-desc pull-left">
                                <a class="title">Beautiful Fit Velvet Sweater For Here</a>
                                <div class="qty">1 x <span class="active">$800.00</span></div>
                                <a href="#" class="close-btn ddr"><i class="icon_close"></i></a>
                            </div>
                        </div>
                        <div class="text-center clear-all-btn">
                                 <span class="cart-block-subtotal">
                                    Cart Subtotal: $1500.00
                                 </span>
                        </div>
                    </div>
                    <div class="row no-gutter">
                        <div class="col-xs-6">
                            <a href="shopping-cart.html" class="btn btn-md btn-third-col btn-w100">View Cart</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="checkout.html" class="btn btn-md btn-third-col btn-w100">Procced to Checkout</a>
                        </div>
                    </div>
                </div>
            </div> -->
                <div class="ajax-loader">&nbsp;</div>
            </div>
    

    



</div><?php }} ?>