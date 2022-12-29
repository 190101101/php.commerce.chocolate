function _update(form, route)
{    
    var formData = new FormData($(form)[0]);
    return $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
            $('.general_form button, .general_form input').prop("disabled", true);
        },
        complete: function(){
            $(form).trigger('reset');
            $('.loader').css("opacity", '0');
            $('.general_form button, .general_form input').prop("disabled", false);
            progress_empty();
        },
        type: "POST",
        url: route,
        data: formData,
        processData: false,
        contentType: false,
    });
}

$('body').on('submit', '.user_update', function(e) {
    e.preventDefault();
    _update('.user_update', '/panel/user/update').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_user_update(json.data);}
    });
});

$('body').on('submit', '.blog_update', function(e) {
    e.preventDefault();
    _update('.blog_update', '/panel/blog/update').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_blog_update(json.data);}
    });
});

$('body').on('submit', '.product_update', function(e) {
    e.preventDefault();
    _update('.product_update', '/panel/product/update').done(function(data){
        var json = $.parseJSON(data);
        console.log(json);
        _message(json);
        if(json.code == 200) {render_product_update(json.data);}
    });
});

$('body').on('submit', '.category_update', function(e) {
    e.preventDefault();
    _update('.category_update', '/panel/category/update').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_category_update(json.data);}
    });
});

$('body').on('submit', '.setting_update', function(e) {
    e.preventDefault();
    _update('.setting_update', '/panel/setting/update').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_setting_update(json.data);}
    });
});


