var config = {
    paths: {
        slick: 'js/libs/slick.min',
    },
    shim: {
        slick: {
            deps: ['jquery']
        }
    },
    map: {
        '*': {
            slider: 'Magento_Theme/js/slider'
        }
    },
};
