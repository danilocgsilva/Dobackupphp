(function(){
    'use strict';

    $(document).ready(function() {
        
        var data = {};

        data.host = $("#host");
        data.user = $("#user");
        data.dbname = $("#dbname");
        data.pass = $("#pass");

        window.data = data;
        
    });

})()