{extends file='parent:frontend/index/topbar-navigation.tpl'}


{block name="frontend_index_top_bar_main"}
    <div id="top-bar">
        {block name="frontend_index_top_bar_nav"}
            <!--{debug}
    {$Shop|var_dump}
    shopname var dump
    {$sShopName|var_dump}
    shopware var dump
    {$Shopware|var_dump}  -->

            <div class="container">

                <div class="pull-left left-top-bar">


                    {block name='frontend_index_actions'}
                        {action module=widgets controller=index action=shopMenu}
                    {/block}



                    <div id="top-contacts">
                        <ul class="list-inline">
                            <li class="hidden-xs">
                                <i class="icon-call-in"></i>
                                <span>{$theme.contact_phone}</span>
                            </li>
                            <li class="hidden-xs">
                                <a href="your@email.com">
                                    <i class="icon-envelope"></i>
                                    <span class="hidden-xs">{$theme.contact_email1}@{$theme.contact_email2}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pull-right">
                    <div id="user-top-bar">
                        <ul class="list-inline"
                        {block name="frontend_index_checkout_actions_notepad"}
                            <li class="navigation--entry entry--notepad" role="menuitem">
                                <a href="{url controller='note'}" title="{"{s namespace='frontend/index/checkout_actions' name='IndexLinkNotepad'}{/s}"|escape}" class="btn">
                                    <i class="icon--heart"></i>
                                    {if $sNotesQuantity > 0}
                                        <span class="badge notes--quantity">
                    {$sNotesQuantity}
                </span>
                                    {/if}
                                </a>
                            </li>
                        {/block}

                        {* My account entry *}
                        {block name="frontend_index_checkout_actions_my_options"}
                            <li class="navigation--entry entry--account" role="menuitem">
                                {block name="frontend_index_checkout_actions_account"}
                                    <a href="{url controller='account'}" title="{"{s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}"|escape}" class="btn is--icon-left entry--link account--link">
                                        <i class="icon--account"></i>
                                        <span class="account--display">
                    {s namespace='frontend/index/checkout_actions' name='IndexLinkAccount'}{/s}
                </span>
                                    </a>
                                {/block}
                            </li>
                        {/block}

</ul>


                    </div>
                </div>
            </div>
        {/block}
        {* Top bar main container *}

    </div>
{/block}



