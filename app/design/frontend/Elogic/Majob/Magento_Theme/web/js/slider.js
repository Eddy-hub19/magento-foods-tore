define([
    'jquery',
    'slick'
], function ($) {
    'use strict';

    $.widget('slider.sliderJs', {
        options: {
            wrapper: null
        },

        _create: function () {
            this._slider();
        },

        _slider: function () {
            let self = this;
            $(self.options.wrapper).slick({
                dots: false,
                customPaging: function (slider, i) {
                    return '<span class="button page-indicator"></span>';
                },
                arrows: true,
                infinite: true,
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                speed: 400,
                autoplaySpeed: 3000,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: true
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: true
                        }
                    },
                    {
                        breakpoint: 320,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: true
                        }
                    }
                ]
            });
        }

    });

    return $.slider.sliderJs;
});
