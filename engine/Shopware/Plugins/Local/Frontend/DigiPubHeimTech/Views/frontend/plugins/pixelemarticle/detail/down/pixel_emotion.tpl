{extends file='parent:frontend/detail/index.tpl'}
{* Tab navigation for the product detail page *}




    {if $sArticle.pixel_emotion}








        {block name="frontend_detail_index_detail" append}

<div class="pixclearfix"></div>

                                {$sArticle.pixel_emotion}
            <div class="pixclearfix"></div>

        {/block}



    {/if}

