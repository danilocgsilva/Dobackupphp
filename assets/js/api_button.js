'use strict';

(function() {

    function api() {
        alert('Now yes! Really!');
    }

    $(document).ready(function() {
        $("#api_button").on('click', function(event) {
            event.preventDefault();

            api();
        })
    })
})()
