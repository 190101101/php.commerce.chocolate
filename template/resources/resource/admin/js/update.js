function _update(form, route)
{    
    var formData = new FormData($(form)[0]);
    return $.ajax({
        beforeSend: function(){
            $(form).trigger('reset');
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
    _update('.user_update', '/admin/user/update').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_user_update(json.data);}
    });
});

$('body').on('submit', '.blog_update', function(e) {
    e.preventDefault();
    _update('.blog_update', '/admin/blog/update').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_blog_update(json.data);}
    });
});

$('body').on('submit', '.product_update', function(e) {
    e.preventDefault();
    _update('.product_update', '/admin/product/update').done(function(data){
        var json = $.parseJSON(data);
        console.log(json);
        _message(json);
        if(json.code == 200) {render_product_update(json.data);}
    });
});

$('body').on('submit', '.category_update', function(e) {
    e.preventDefault();
    _update('.category_update', '/admin/category/update').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_category_update(json.data);}
    });
});

$('body').on('submit', '.setting_update', function(e) {
    e.preventDefault();
    _update('.setting_update', '/admin/setting/update').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_setting_update(json.data);}
    });
});
