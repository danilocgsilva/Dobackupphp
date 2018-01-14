'use strict';

(function() {

    function api() {

        alert(url);

        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                alert('sucesso 2: ' + data);
            },
            error: function(xhr, status, error) {
                alert('erro!');
            }
        });
    }

    $(document).ready(function() {
        $("#api_button").on('click', function(event) {
            event.preventDefault();

            api();
        })
    })
})()
