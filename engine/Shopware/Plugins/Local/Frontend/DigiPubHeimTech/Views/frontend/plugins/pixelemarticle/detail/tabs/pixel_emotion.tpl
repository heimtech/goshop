{extends file='parent:frontend/detail/tabs.tpl'}
{* Tab navigation for the product detail page *}




    {if $sArticle.pixel_emotion}




        {block name="frontend_detail_tabs_description" prepend}


                <a href="#" class="tab--link"
                   title="{s name='pixelEmotionTab' namespace="frontend/detail/tabs"}Einkaufswelt{/s}">{s name='pixelEmotionTab' namespace="frontend/detail/tabs"}Einkaufswelt{/s}</a>


        {/block}




        {block name="frontend_detail_tabs_content_description" prepend}


                <div class="tab--container">


                    {* Description title *}

                    <div class="tab--header">

                        <a href="#" class="tab--title" title="{s name='pixelEmotionTab' namespace="frontend/detail/tabs"}Einkaufswelt{/s}</a>

                    </div>


                    {* Description preview *}

                    <div class="tab--preview">

                        {s name='pixelEmotionTab' namespace="frontend/detail/tabs"}Einkaufswelt{/s}<a href="#" class="tab--link"
                                                                                    title="{s name="PreviewTextMore"}{/s}">{s name="PreviewTextMore"}{/s}</a>

                    </div>


                    {* Description content *}

                    <div class="tab--content">


                        {* Offcanvas buttons *}

                        <div class="buttons--off-canvas">

                            <a href="#"
                               title="{"{s name="OffcanvasCloseMenu" namespace="frontend/detail/description"}{/s}"|escape}"
                               class="close--off-canvas">
                                <i class="icon--arrow-left"></i>
                                {s name="OffcanvasCloseMenu" namespace="frontend/detail/description"}{/s}
                            </a>

                        </div>


                        <div class="content--description">



                            <div class="product--description" itemprop="description">
                                {$sArticle.pixel_emotion}





                            </div>


                        </div>


                    </div>


                </div>

        {/block}



    {/if}

