import './bootstrap';
import * as Vue from 'vue';

window.Vue = require('vue');
Vue.component("color-section", require('./componenets/Color').default)

const myApp = Vue({
    el: '#myApp',
    data: function (){
        return {
            checkboxes: [],
            name: "Abir",


        }
    },
    methods: function (){

    }
});
