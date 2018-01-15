(function() {

    'use strict';

    function api() {
        var url = window.location.href + '?action=api';

        var userData = {
            host:   $("#host").val(),
            user:   $("#user").val(),
            dbname: $("#dbname").val(),
            pass:   $("#pass").val()
        }

        $.ajax({
            url: url,
            type: 'GET',
            data: userData,
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

        // console.log(window.data);
    }


    $(document).ready(function() {

        $("#api_button").on('click', function(event) {
            event.preventDefault();

            $(this).addClass('disabled');
            api();
        })
    })
})();
