{extends file="parent:frontend/listing/product-box/box-basic.tpl"}

{block name="frontend_listing_box_article_content"}
    <div class="box--content is--rounded">
        <a class="box-custom--info" href="{$sArticle.linkDetailsRewrited}">
           <div class="info--wrapper">
               <span class="info--name">
                   {$sArticle.articleName|escape}
               </span>
               <span class="info--price">
                   {$sArticle.price|currency}
               </span>
           </div>
        </a>
        <div class="custom-box--image">
{*            <img srcset="{$sArticle.image.thumbnails[0].sourceSet}" alt="">*}
            {include file="parent:frontend/listing/product-box/product-image.tpl"}
        </div>
    </div>
{/block}

{block name='frontend_listing_box_article_image_picture_element'}
    <img srcset="{$sArticle.image.thumbnails[1].sourceSet}"
         alt="{$desc}"
         data-extension="{$sArticle.image.extension}"
         title="{$desc|truncate:160}" />
{/block}
