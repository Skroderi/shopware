(function ($, window) {

    $.overridePlugin('swAddArticle', {
        sendSerializedForm: function(){
            const me = this;

            me.opts.showModal = false;

            me.superclass.sendSerializedForm.apply(this, arguments); // last origin code wil be done after this line
        }
    })

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
