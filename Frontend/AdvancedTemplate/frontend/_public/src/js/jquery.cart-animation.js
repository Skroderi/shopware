(function ($, window) {
    $.subscribe('plugin/swAddArticle/onAddArticle', function(event, plugin){

        var $cartBtn = $('.entry--cart');

        plugin.opts.showModal = false;

        $.loadingIndicator.close();
        $.overlay.close();

        $cartBtn.addClass('rumble');

        window.setTimeout(function(){
            $cartBtn.removeClass('rumble')
        }, 2000)

        console.log(event);
        console.log('-------------');
        console.log(plugin);
    })
})(jQuery, window);
