var config = {
    paths: {
        slick: 'js/libs/slick.min',
        script: '"Magento_Theme::web/js/script.js'
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
