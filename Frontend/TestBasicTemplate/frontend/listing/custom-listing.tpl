{extends file="parent:frontend/listing/index.tpl"}

{block name='frontend_index_content'}
    <div class="custom-listing">
        {$smarty.block.parent}
    </div>
{/block}


{block name="frontend_listing_list_inline"}
{$productBoxLayout = "custom"}
    {debug}
    <div class="custom-listing--listing"></div>
        {foreach $sArticles as $sArticle}
            {include file="frontend/listing/product-box/box-custom.tpl"}
        {/foreach}
    </div>
{/block}

{block name="frontend_index_content_left"}{/block}

{block name="frontend_listing_index_topseller"}{/block}

