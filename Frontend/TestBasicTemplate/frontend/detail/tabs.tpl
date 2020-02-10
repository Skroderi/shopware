{extends file="parent:frontend/detail/tabs.tpl"}

{block name="frontend_detail_tabs_navigation_inner"}
    {$smarty.block.parent}

    {block name="frontend_detail_tabs_test"}
        <a href="#"
           class="tab--link"
           title="Test"
           data-tabName="test">
            Test
        </a>
    {/block}
{/block}


{block name="frontend_detail_tabs_content_inner"}
    {$smarty.block.parent}

    <div class="tab--container">
        <div class="tab--header">
            <a href="#" class="tab--title" title="test">Test</a>
         </div>
    <div class="tab--preview">
        <p>test preview</p>
    </div>
    <div class="tab--content">
        <div class="buttons--off-canvas">
                {s name="OffcanvasCloseMenu" namespace="frontend/detail/description" assign="snippetOffcanvasCloseMenu"}{/s}
                <a href="#" title="{$snippetOffcanvasCloseMenu|escape}" class="close--off-canvas">
                    <i class="icon--arrow-left"></i>
                    {s name="OffcanvasCloseMenu" namespace="frontend/detail/description"}{/s}
                </a>
        </div>
        <p>test content</p>
    </div>
    </div>
{/block}
