
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */


window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));


window.onload = function () {

    var example2 = new Vue({
        el: '#example-2',
        data: {
            name: 'Vue.js'
        },
        // define methods under the `methods` object
        methods: {
            addMovie: function (event) {

                var a = [];
                if (localStorage.getItem("film") === null) {
                    console.log("N'extiste pas");
                    a.push(event);
                    localStorage.setItem('film', JSON.stringify(a));
                }
                else {
                    a = JSON.parse(localStorage.getItem('film'));
                    for (i = 0; i < a.length; i++) {
                        if (Object.is(a[i], event)) {
                            return true;
                        }
                    }
                    a.push(event);
                    localStorage.setItem('film', JSON.stringify(a));
                }



            }
        }
    });
};

$(document).ready(function() {


    $('#autocomplete').devbridgeAutocomplete({
        serviceUrl: '/api/filmsrecherche',
        paramName: 'query',
        onSelect: function (suggestion) {
            $("#id_movie").val(suggestion.data); // save selected id to hidden input

        }
    });






});


