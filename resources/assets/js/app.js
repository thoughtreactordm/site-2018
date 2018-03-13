require('./bootstrap');

window.Vue = require('vue');

Vue.component('example', require('./components/Example.vue'));

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
