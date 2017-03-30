
{block name='frontend_index_search'}

<div class="col-md-3 top-search-box hidden-sm hidden-xs">

        <div class="navigation--entry entry--search required form-group" role="menuitem" data-search="true" aria-haspopup="true"{if $theme.focusSearch && {controllerName|lower} == 'index'} data-activeOnStart="true"{/if}>
            <a class="btn entry--link entry--trigger" href="#show-hide--search" title="{"{s namespace='frontend/index/search' name="IndexTitleSearchToggle"}{/s}"|escape}">
                {block name='frontend_index_search_display'}
                    <span class="search--display">{s namespace='frontend/index/search' name="IndexSearchFieldSubmit"}{/s}</span>
                {/block}

            </a>
            {* Include of the search form *}
            {block name='frontend_index_search_include'}
                {include file="frontend/index/search.tpl"}
            {/block}
        </div>


</div>
{/block}


        {* Search form *}


        {* Logo container *}
        {block name='frontend_index_logo_container'}
            {include file="frontend/index/logo-container.tpl"}
        {/block}

        {block name='frontend_index_offcanvas_left_trigger'}
            <li class="navigation--entry entry--menu-left" role="menuitem">
                <a class="entry--link entry--trigger btn is--icon-left" href="#offcanvas--left" data-offcanvas="true" data-offCanvasSelector=".sidebar-main">
                    <i class="icon--menu"></i> {s namespace='frontend/index/menu_left' name="IndexLinkMenu"}{/s}
                </a>
            </li>
        {/block}

        {* Cart entry *}
        {block name='frontend_index_checkout_actions'}
            {* Include of the cart *}
            {block name='frontend_index_checkout_actions_include'}
                {action module=widgets controller=checkout action=info}
            {/block}
        {/block}

