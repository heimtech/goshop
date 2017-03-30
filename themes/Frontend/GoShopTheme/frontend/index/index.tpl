{extends file="parent:frontend/index/index.tpl"}



{block name='frontend_index_header_navigation'}
    <div id="header-bar" class="header--navigation">
<div class="container">
    <div class="row shop--navigation ">
    {* Shop navigation *}
    {block name='frontend_index_shop_navigation'}
        {include file="frontend/index/shop-navigation.tpl"}
    {/block}

    {block name='frontend_index_container_ajax_cart'}
        <div class="container--ajax-cart" data-collapse-cart="true"{if $theme.offcanvasCart} data-displayMode="offcanvas"{/if}></div>
    {/block}
    </div>

</div>

    </div>
{/block}