(function($){
    $.plugin('helloWorld',{

        defaults:{
            message: 'hello'
        },

        init:function(){
          const me = this;

          me.applyDataAttributes()

          me._on(me.$el, 'click', $.proxy(me.hello, me));
        },
        hello: function(){
            const me = this;
            console.log(me.opts.message)
            const slogan = document.querySelector('.shop-slogan')
            console.log(slogan.textContent)
        }
    });

    $('.shop-slogan').helloWorld();

})(jQuery)
