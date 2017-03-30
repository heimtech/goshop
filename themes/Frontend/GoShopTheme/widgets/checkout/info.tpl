<div class="col-md-3 hidden-sm hidden-xs">

    {block name="frontend_index_checkout_actions_cart"}
<ul>
    <li class="navigation--entry entry--cart" role="menuitem">
        <div id="shopping-cart-wrapper" >
            <a href="{url controller='checkout' action='cart'}" class="shp-ca" title="{"{s namespace='frontend/index/checkout_actions' name='IndexLinkCart'}{/s}"|escape}" data-toggle="dropdown">
                   <span class="cart--display">
                {if $sUserLoggedIn}
                    {s name='IndexLinkCheckout' namespace='frontend/index/checkout_actions'}{/s}
                {else}
                    {s namespace='frontend/index/checkout_actions' name='IndexLinkCart'}{/s}
                {/if}
            </span>

                <div class="s-bag-1">
                    <i class="icon-bag"></i>
                </div>
                <div class="s-cart-pan">
                    <div class="s-bag-2">
                        <span class="dd-products-count">{$sBasketQuantity}</span> Artikel / <span class="active dd-products-price">{$sBasketAmount|currency} </span>
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
    {/block}

    {block name="frontend_index_checkout_actions_inner"}{/block}



</div>