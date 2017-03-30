<div id="header-logo" class="col-md-6 col-sm-12" role="banner">

    {block name='frontend_index_logo'}



        <a href="{url controller='index'} title="{"{config name=shopName}"|escapeHtml} - {"{s name='IndexLinkDefault' namespace="frontend/index/index"}{/s}"|escape}"">
            <img src="{link file=$theme.desktopLogo}" class="logo center-block hidden-xs" >
            <img src="{link file=$theme.mobileLogo}" class="logo center-block visible-xs hidden-sm" alt="{"{config name=shopName}"|escapeHtml} - {"{s name='IndexLinkDefault' namespace="frontend/index/index"}{/s}"|escape}" >
        </a>
    {/block}


    {block name='frontend_index_logo_supportinfo'}
        {if $theme.checkoutHeader && {controllerName|lower} === 'checkout' && {controllerAction|lower} !== 'cart'}
            <div class="logo--supportinfo block">
                {s name='RegisterSupportInfo' namespace='frontend/register/index'}{/s}
            </div>
        {/if}
    {/block}

    {* Trusted Shops *}
    {block name='frontend_index_logo_trusted_shops'}{/block}
</div>