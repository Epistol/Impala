
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

const app = new Vue({
    el: '#app'
});


$(document).ready(function(){


    $( "#autocomplete" ).autocomplete({

        source: function( request, response ) {

            $.ajax({
                url: "https://api.themoviedb.org/3/search/movie?api_key=72b165171d37b62571511123670a79c2&language=fr&page=1&include_adult=false&",
                dataType: "jsonp",
                data: {
                    query: request.term
                },
                success: function(data) {

                    $.each(data, function() {
                        $.each(this, function(k, item) {
                           /* response(item['title']);*/
                                $("div.test").append(item["title"] + "<br /> ");

                        });
                    });

                }
            });
        },
        minLength: 3,
        select: function (event, ui) {
            log(ui.item ? "Selected: " + ui.item.label : "Nothing selected, input was " + this.value);
        }
    });
});