(function($){
    $.plugin('helloWorld',{

        defaults:{

        },

        init:function(){
            console.log('kaaaaaaa');
        }

    });

    $('.shop-slogan').helloWorld();

})(jQuery)
