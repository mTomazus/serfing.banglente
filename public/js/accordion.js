(function($) {
    
    var panels = $('.pamokos .accordion__content').hide();

    panels.first().show();

    $('.pamokos .accordion__button').click(function() {

        panels.slideUp();

        $(this).next().slideDown();

        $('.pamokos .accordion__button--active').removeClass('accordion__button--active');

        $(this).addClass('accordion__button--active');

        return false;

    });

})(jQuery);

(function($) {
    
    var panels2 = $('.nuoma .accordion__content').hide();

    panels2.first().show();

    $('.nuoma .accordion__button').click(function() {

        panels2.slideUp();

        $(this).next().slideDown();

        $('.nuoma .accordion__button--active').removeClass('accordion__button--active');

        $(this).addClass('accordion__button--active');

        return false;

    });

})(jQuery);

