
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
            // `this` inside methods points to the Vue instance
            alert('COUCOU ! ' + event + '!');
            $.ajax({
                url:'post/post_vote_up',
                type:'POST',
                data:event,
                contentType:"multipart/form-data",
                processData:false,
                error:function(event2){alert('Section created :)' + event)}
            });
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