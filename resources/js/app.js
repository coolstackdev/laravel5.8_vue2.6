require('./bootstrap');

import LoginComponent from './components/auth/LoginComponent';
import RegisterComponent from './components/auth/RegisterComponent';

import HeaderComponent from './components/template/HeaderComponent';
import FooterComponent from './components/template/FooterComponent';

import RentalsList from './components/RentalsList';

window.Vue = require('vue');

const app = new Vue({
    el: '#app',
    components: {
        LoginComponent,
        RegisterComponent,
        HeaderComponent,
        FooterComponent,
        RentalsList
    }
});
