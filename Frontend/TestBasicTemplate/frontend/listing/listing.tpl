{extends file="parent:frontend/listing/listing.tpl"}

{block name="frontend_listing_list_inline"}
    {debug}
<ul  class="listing-margin-fix">
    {foreach $sArticles as $product}
        <a href="{$product.linkDetails}">
            <img srcset="{$product.image.thumbnails[0].sourceSet}" alt="">
            <h2>{$product.articleName}</h2>
            <h3>{$product.price|currency}</h3>

        </a>
      <hr>
    {/foreach}

</ul>

{/block}
