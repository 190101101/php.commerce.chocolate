function _update(form, route)
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


$('body').on('submit', '.cart_piece_update_form', function(e) {
    e.preventDefault();
    _update('.cart_piece_update_form', '/cart/update').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_cart_piece(json.data, json.option);}
    });
});

$('body').on('submit', '.profile_info_form', function(e) {
    e.preventDefault();
    _update('.profile_info_form', '/profile/update/info').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_profile_info_update(json.data);}
    });
});

$('body').on('submit', '.profile_password_form', function(e) {
    e.preventDefault();
    _update('.profile_password_form', '/profile/update/password').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_profile_password_update(json.data);}
    });
});



