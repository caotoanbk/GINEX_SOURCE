window._ = require('lodash');

try {
    window.$ = window.jQuery = require('jquery');

    require('bootstrap/dist/js/bootstrap.bundle');
} catch (e) {}

const WOW = require('wowjs')
window.wow = new WOW.WOW({
    live: false
})

require('magnific-popup')


window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


let token = document.head.querySelector('meta[name="csrf-token"]');

if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
    console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}