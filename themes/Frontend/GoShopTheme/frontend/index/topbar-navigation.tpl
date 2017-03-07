{extends file='parent:frontend/index/topbar-navigation.tpl'}


{block name="frontend_index_top_bar_nav"}
{debug}
    {$Shop|var_dump}
    shopname var dump
    {$sShopName|var_dump}
    shopware var dump
    {$Shopware|var_dump}

    <div>

    <div class="pull-left left-top-bar">
        <div id="lang">
            <ul class="list-inline hidden-xs">
                <li>
                    <a href="#" class="active">EnglishGO</a>
                </li>
                <li>
                    <a href="#">French</a>
                </li>
                <li>
                    <span></span>
                </li>
            </ul>
        </div>
        <div id="currencies">
            <ul class="list-inline hidden-xs">
                <li>
                    <a href="#" class="active">USD</a>
                </li>
                <li>
                    <a href="#">EUR</a>
                </li>
            </ul>
        </div>
        <div id="top-contacts">
            <ul class="list-inline">
                <li class="hidden-xs">
                    <i class="icon-call-in"></i>
                    <span>+ 1 (800) 2364 332 23 16</span>
                </li>
                <li class="hidden-xs">
                    <a href="your@email.com">
                        <i class="icon-envelope"></i>
                        <span class="hidden-xs">your@email.com</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    {action module=widgets controller=index action=shopMenu}
    <div class="pull-right">
        <div id="user-top-bar">
            {action module=widgets controller=index action=shopMenu}

            {* Article Compare *}
            {block name='frontend_index_navigation_inline'}
                {if {config name="compareShow"}}
                    <div class="navigation--entry entry--compare is--hidden" role="menuitem" aria-haspopup="true" data-drop-down-menu="true">
                        {block name='frontend_index_navigation_compare'}
                            {action module=widgets controller=compare}
                        {/block}
                    </div>
                {/if}
            {/block}

            {* Service / Support drop down *}
            {block name="frontend_index_checkout_actions_service_menu"}
                <div class="navigation--entry entry--service has--drop-down" role="menuitem" aria-haspopup="true" data-drop-down-menu="true">
                    <i class="icon--service"></i> {s namespace='frontend/index/checkout_actions' name='IndexLinkService'}{/s}

                    {* Include of the widget *}
                    {block name="frontend_index_checkout_actions_service_menu_include"}
                        {action module=widgets controller=index action=menu group=gLeft}
                    {/block}
                </div>
            {/block}
        </div>
    </div>
</div>
    {/block}
