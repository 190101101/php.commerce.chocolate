function _create(form, route)
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

$('body').on('submit', '.user_create', function(e) {
    e.preventDefault();
    _create('.user_create', '/admin/user/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_user_create(json.data);}
    });
});

$('body').on('submit', '.blog_create', function(e) {
    e.preventDefault();
    _create('.blog_create', '/admin/blog/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_blog_create(json.data);}
    });
});

$('body').on('submit', '.product_create', function(e) {
    e.preventDefault();
    _create('.product_create', '/admin/product/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_product_create(json.data);}
    });
});


$('body').on('submit', '.gallery_create', function(e) {
    e.preventDefault();
    _create('.gallery_create', '/admin/gallery/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_gallery_create(json.data);}
    });
});

$('body').on('submit', '.category_create', function(e) {
    e.preventDefault();
    _create('.category_create', '/admin/category/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_category_create(json.data);}
    });
});

$('body').on('submit', '.setting_create', function(e) {
    e.preventDefault();
    _create('.setting_create', '/admin/setting/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_setting_create(json.data);}
    });
});

$('body').on('submit', '.comment_create', function(e) {
    e.preventDefault();
    _update('.comment_create', '/admin/comment/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_comment_create(json.data);}
    });
});

$('body').on('submit', '.comment_create_history', function(e) {
    e.preventDefault();
    _update('.comment_create_history', '/admin/comment/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_comment_create_history(json.data);}
    });
});

$('body').on('submit', '.image_create', function(e) {
    e.preventDefault();
    _create('.image_create', '/admin/image/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_image_create(json.data);}
    });
});


$('body').on('submit', '.slider_create', function(e) {
    e.preventDefault();
    _create('.slider_create', '/admin/slider/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_slider_create(json.data);}
    });
});