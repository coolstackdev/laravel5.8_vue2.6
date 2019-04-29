require('./bootstrap');

import HeaderComponent from './components/HeaderComponent';
import FooterComponent from './components/FooterComponent';

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    components: { HeaderComponent, FooterComponent }
});
