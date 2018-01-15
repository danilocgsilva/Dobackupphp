(function() {

    'use strict';

    function api() {
        var url = window.location.href + '?action=api';

        $.ajax({
            url: url,
            type: 'GET',
            data = window.data,
            success: function(data) {
                alert('sucesso 2: ' + data);
            },
            error: function(xhr, status, error) {
                alert('erro!');
            },
            complete: function() {
                $("#api_button").removeClass('disabled');
            }
        });
    }


    $(document).ready(function() {

        $("#api_button").on('click', function(event) {
            event.preventDefault();

            $(this).addClass('disabled');
            api();
        })
    })
})()
