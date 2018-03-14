require('./bootstrap');
require('jssocials/dist/jssocials');
require('jssocials/dist/jssocials.css');
require('jssocials/dist/jssocials-theme-flat.css');

window.Vue = require('vue');

const app = new Vue({
    el: '#app',

    data: {
      menu: false
    },

    methods: {
        toggleMenu(){
            this.menu = !this.menu;

            let scroll = this.menu ? 'hidden' : 'auto';

            $('html').css('overflow', scroll);
            $('body').css('overflow', scroll);
        }
    }
});
