function _create(form, route)
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

$('body').on('submit', '.notice_create_all', function(e) {
    e.preventDefault();
    _create('.notice_create_all', '/panel/notice/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_notice_create(json.data);}
    });
});

$('body').on('submit', '.notice_create_user', function(e) {
    e.preventDefault();
    _create('.notice_create_user', '/panel/notice/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_notice_create(json.data);}
    });
});

$('body').on('submit', '.user_create', function(e) {
    e.preventDefault();
    _create('.user_create', '/panel/user/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_user_create(json.data);}
    });
});

$('body').on('submit', '.blog_create', function(e) {
    e.preventDefault();
    _create('.blog_create', '/panel/blog/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_blog_create(json.data);}
    });
});

$('body').on('submit', '.product_create', function(e) {
    e.preventDefault();
    _create('.product_create', '/panel/product/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_product_create(json.data);}
    });
});


$('body').on('submit', '.gallery_create', function(e) {
    e.preventDefault();
    _create('.gallery_create', '/panel/gallery/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_gallery_create(json.data);}
    });
});

$('body').on('submit', '.category_create', function(e) {
    e.preventDefault();
    _create('.category_create', '/panel/category/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_category_create(json.data);}
    });
});

$('body').on('submit', '.setting_create', function(e) {
    e.preventDefault();
    _create('.setting_create', '/panel/setting/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_setting_create(json.data);}
    });
});

$('body').on('submit', '.image_create', function(e) {
    e.preventDefault();
    _create('.image_create', '/panel/image/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_image_create(json.data);}
    });
});


$('body').on('submit', '.slider_create', function(e) {
    e.preventDefault();
    _create('.slider_create', '/panel/slider/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_slider_create(json.data);}
    });
});

$('body').on('submit', '.video_create', function(e) {
    e.preventDefault();
    _create('.video_create', '/panel/video/create').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200) {render_video_create(json.data);}
    });
});