function _ajax(arg, method = 'GET')
{
    $.ajax({
        type: method,
        url: $(arg).attr("data-id"),
        success: function(data){
            var json = $.parseJSON(data);
            _message(json);
        }
    });
}
