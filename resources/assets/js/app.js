
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

                url: "/api/filmsrecherche",
                dataType: "json",
                success: function(data2){

                    $.each(data2.results, function(k, v) {
                        console.log(v.title);
                    });
                },
                error: function (data){
                    console.log(data)
                },
                data: {
                    query: request.term
                },
                select: function(event, ui)
                {

                    $(this).val(ui.item.label);
                    $(this).closest('tr').find("input[id^='drawing_number']").val(ui.item.dwg);
                    return false; // find the drawing number input on that row
                }


            });
        },
        minLength: 3

    });
});