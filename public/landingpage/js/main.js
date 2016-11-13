   $(document).ready(function() {

     $.fn.editable.defaults.mode = 'inline';

       $.fn.editable.defaults.params = function (params) 
       {
        params._token = $("#_token").data("token");
        return params;
       };
     $('#description').editable();
     $('#description').editable({
                validate: function(value) {
                if($.trim(value) == '') 
                    return 'Value is required.';
                },
                type: 'text',
                ajaxOptions: {
                dataType: 'json',
                type: 'post'
                }} );
 } );