require('./bootstrap');
require('jssocials/dist/jssocials');
require('jssocials/dist/jssocials.css');
require('jssocials/dist/jssocials-theme-flat.css');
require('lightbox2/dist/js/lightbox');
require('lightbox2/dist/css/lightbox.css');

import fontawesome from '@fortawesome/fontawesome';
import faBars from '@fortawesome/fontawesome-free-solid/faBars';
import faSpinner from '@fortawesome/fontawesome-free-solid/faSpinner';
import faHeart from '@fortawesome/fontawesome-free-solid/faHeart';
import faFacebook from '@fortawesome/fontawesome-free-brands/faFacebook';
import faTwitter from '@fortawesome/fontawesome-free-brands/faTwitter';
import faTwitch from '@fortawesome/fontawesome-free-brands/faTwitch';
import faYoutube from '@fortawesome/fontawesome-free-brands/faYoutube';
import faDiscord from '@fortawesome/fontawesome-free-brands/faDiscord';
import faGooglePlus from '@fortawesome/fontawesome-free-brands/faGooglePlusG';

fontawesome.library.add(faBars);
fontawesome.library.add(faSpinner);
fontawesome.library.add(faHeart);
fontawesome.library.add(faFacebook);
fontawesome.library.add(faDiscord);
fontawesome.library.add(faGooglePlus);
fontawesome.library.add(faTwitch);
fontawesome.library.add(faTwitter);
fontawesome.library.add(faYoutube);

window.Vue = require('vue');

const app = new Vue({
    el: '#app',

    data: {
        loading: true,
        menu: false
    },

    mounted() {
        this.loading = false;
        var self = this;

        $("a").click(function(e) {
            if (($(this).attr("href") !== undefined)
                && ($(this).attr("target") === undefined)
                && ($(this).data("lightbox") === undefined))
                self.loading = true;
        });
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
