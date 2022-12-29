function _delete(arg)
{
    alertify.confirm('вы уверены что хотите удалить???', function(){ 
        $(arg).parents('.table-media tr').hide();
        $.ajax({
            beforeSend: function(){
                $('.loader').css("opacity", '1');
            },
            type: "GET",
            url: $(arg).attr("data-id"),
            complete: function(){
                $('.loader').css("opacity", '0');
            },
            success: function(message){
                _message(JSON.parse(message));
            }
        });
    });
}

function __delete(arg)
{
    $(arg).parents('.table-media tr').hide();
    return $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
        },
        type: "GET",
        url: $(arg).attr("data-id"),
        complete: function(){
            $('.loader').css("opacity", '0');
        }
    });
}

$('body').on('click', '.cart_del', function(e) {
    argument = this;
    $('.table_box a').prop('disabled', true);
    alertify.confirm('вы уверены что хотите удалить???', function(){ 
        __delete(argument).done(function(data){
            $('.cart_add').prop("disabled", false);
            var json = $.parseJSON(data);
            _message(json);
            if(json.code == 200){
                render_cart_delete(json.data);
            }
        });
    });
});
