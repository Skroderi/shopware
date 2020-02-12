(function ($){

    $.overridePlugin('swProductSlider',{
        slide:function(){
            const me = this;
            me.customMethod();

            me.superclass.slide.apply(this, arguments);
        },
        customMethod: function () {
        const tick = new Date().toLocaleTimeString();
        console.log('Slide ' + tick);
        }
    })
})(jQuery)
