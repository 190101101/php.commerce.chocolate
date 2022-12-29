function _create(form, route)
{    
    var formData = new FormData($(form)[0]);
    return $.ajax({
        beforeSend: function(){
            $(form).trigger('reset');
            $('.loader').css("opacity", '1');
            $('.general_form button, .general_form input').prop("disabled", true);
        },
        type: "POST",
        url: route,
        data: formData,
        processData: false,
        contentType: false,
        complete: function(){
            $('.loader').css("opacity", '0');
            $('.general_form button, .general_form input').prop("disabled", false);
        }
    });
}

$('body').on('click', '.cart_add', function() {
    $(this).prop("disabled", true);
    $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
        },
        type: 'GET',
        url: $(this).attr("data-id"),
        complete: function(){
            $('.loader').css("opacity", '0');
        },
        success: function(data){
            var json = $.parseJSON(data);
            _message(json);
            if(json.code == 200) {
                render_cart_create(json.data);
            }

            if(json.code == 404)
            {
                setTimeout(
                    function() {
                        $(location).attr('href', '/signout');
                    },
                5000);
            }
        }
    });
});

$('body').on('click', '.cart_confirm', function() {
    argument = this;
    alertify.confirm('вы хотите подтвердить свой заказ???', function(){ 
        $.ajax({
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
                history_update('/cart');
            }
        });
    });
});


$('body').on('change', '.cart_user_confirm', function() {
    argument = this;
    alertify.confirm('вы уверены что  хотите подтвердить свой заказ не смотря что корзина изменилось админстратором ?', function(){ 
        $.ajax({
            beforeSend: function(){
                $('.loader').css("opacity", '1');
            },
            type: 'GET',
            url: $(argument).attr("data-id"),
            complete: function(){
                $('.loader').css("opacity", '0');
                $('.cart_user_confirm').prop("disabled", true);
                $('.user_confirm').delay(2000).hide();
            },
            success: function(data){
                var json = $.parseJSON(data);
                _message(json);
            }
        });
    }, function(){
        $('.cart_user_confirm').prop("checked", false);
    });
});
