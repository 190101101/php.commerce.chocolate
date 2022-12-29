function _ajax(argument)
{
    return $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
        },
        type: 'GET',
        url: $(argument).attr("data-id"),
        complete: function(){
            $('.loader').css("opacity", '0');
        },
        success: function(data){
            var json = $.parseJSON(data);
            _message(json);
        }
    });
}

function __ajax(argument)
{
    $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
        },
        type: 'POST',
        url: $(argument).attr("data-id"),
        complete: function(){
            $('.loader').css("opacity", '0');
        },
        success: function(data){
            var json = $.parseJSON(data);
            _message(json);
        }
    });
}

function __ajaxWithattr(argument)
{
    return $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
        },
        type: 'POST',
        url: $(argument).attr("data-id"),
        complete: function(){
            $('.loader').css("opacity", '0');
        },
    });
}

