
(function($,window){

    $window = $(window)

    $.plugin('swScrollNavigation',{
        defaults:{
            showPosition:300,
            scrollClass: 'scroll-nav',
            activeClass: 'is--active'
        },

        init: function(){
            const me = this;
            me.applyDataAttributes();
            me.createElement();
            me.registerEvents()
        },

        createElement: function(){
            const me =this;
            me.$nav = me.$el.clone(true,true);
            me.$nav.addClass(me.opts.scrollClass).appendTo('body')
        },

        registerEvents: function(){
            const me = this;
            me._on($window, 'scroll', $.proxy(me.onScroll, me))
        },

        onScroll: function(){
            const me = this;
            me.$nav.toggleClass(me.opts.activeClass, $window.scrollTop() >= me.opts.showPosition)
        },
        destroy: function () {
            const me = this;

            me.$nav.remove();
            me._destroy();
        }
    });

    window.StateManager.addPlugin(
        '*[data-scrollnav="true"]',
        'swScrollNavigation',
        ['m','l', 'xl']
    );


    // $('.navigation-main').swScrollNavigation();
})(jQuery, window)
