function _ajax(form, route)
{    
    var formData = new FormData($(form)[0]);
    return $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
        },
        type: "POST",
        url: route,
        data: formData,
        processData: false,
        contentType: false,
        complete: function(){
            $('.loader').css("opacity", '0');
        }
    });
}

function __ajax(form, route)
{    
    var formData = new FormData($(form)[0]);
    return $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
        },
        type: "POST",
        url: route,
        data: formData,
        processData: false,
        contentType: false,
        complete: function(){
            $('.loader').css("opacity", '0');
        }
    });
}

function _ajaxWithattr(argument)
{
    return $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
        },
        type: 'GET',
        url: $(argument).attr("data-id"),
        complete: function(){
            $('.loader').css("opacity", '0');
        }
    });
}

$('body').on('click', '.cart_drop', function() {
    alertify.confirm('вы уверены что хотите удалить все продукты из корзины?', function(){ 
        _ajaxWithattr('.cart_drop', this).done(function(data){
            $('.cart_add').prop("disabled", false);
            var json = $.parseJSON(data);
            _message(json);
            if(json.code == 200) {render_cart_drop(json.option.count);}
        });
    });
});

$('body').on('submit', '.signin_form', function(e) {
    e.preventDefault();
    _ajax('.signin_form', '/signin').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        
        if(json.code == 200)
        {
            setTimeout(
                function() {
                    $(location).attr('href', '/shop');
                },
            1000);
        }
    });
});
    

$('body').on('submit', '.signup_form', function(e) {
    e.preventDefault();
    _ajax('.signup_form', '/signup').done(function(data){
        var json = $.parseJSON(data);
        _message(json);
        if(json.code == 200)
        {
            setTimeout(
                function() {
                    $(location).attr('href', '/shop');
                },
            3000);
        }
    });
});
    
$('body').on('submit', '.search-box', function(e) {
    $('.search-box').prop("disabled", true);
    e.preventDefault();
    __ajax('.search-box', '/search').done(function(data){
        var json = $.parseJSON(data);
        if(json.code == 200) {
            history_render();
            render_search_read(json.data);
        }
        if(json.code == 404 || json.code == 300)
        {
            _message(json);
        }
    });
});

function ___ajax(url)
{
    return $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
        },
        type: 'GET',
        url: url,
        complete: function(){
            $('.loader').css("opacity", '0');
        }
    });
}

$('body').on('click', '.shop_load_more', function(e){
    e.preventDefault();
    start = $(".shop_content").attr('data-start');
    ___ajax('/shop/LoadMore/'+start).done(function(data){
        var json = $.parseJSON(data);
        if(json.option.code == 404)
        {
            $('.shop_load_more').hide();
        }
        if(json.code == 200) {
            $('.shop_content').attr('data-start', json.option.count);
            render_productLoadmore(json.data); 
        }
        if(json.code == 300) {
            $('.shop_load_more').prop('disabled', true);
            _message(json);
        }
    });
});

$('body').on('click', '.gallery_load_more', function(e){
    e.preventDefault();
    start = $(".gallery_content").attr('data-start');
    ___ajax('/gallery/LoadMore/'+start).done(function(data){
        var json = $.parseJSON(data);
        if(json.option.code == 404)
        {
            $('.gallery_load_more').hide();
        }
        if(json.code == 200) {
            $('.gallery_content').attr('data-start', json.option.count);
            render_galleryLoadmore(json.data); 
        }
        if(json.code == 300){
            $('.gallery_load_more').prop('disabled', true);
            _message(json);
        }
    });
});

$('body').on('click', '.video_load_more', function(e){
    e.preventDefault();
    start = $(".gallery_content").attr('data-start');
    ___ajax('/video/LoadMore/'+start).done(function(data){
        var json = $.parseJSON(data);
        if(json.option.code == 404)
        {
            $('.video_load_more').hide();
        }
        if(json.code == 200) {
            $('.gallery_content').attr('data-start', json.option.count);
            render_videoLoadmore(json.data); 
        }
        if(json.code == 300){
            _message(json);
        }
    });
});


$('body').on('click', '.productbycategoryloadmore', function(e){
    e.preventDefault();
    id = $(".shop_content").attr('data-category');
    start = $(".shop_content").attr('data-start');
    ___ajax('/ProductByCategory/LoadMore/'+id+"/"+start).done(function(data){
        var json = $.parseJSON(data);
        if(json.option.code == 404)
        {
            $('.productbycategoryloadmore').hide();
        }
        if(json.code == 200) {
            $('.shop_content').attr('data-start', json.option.count);
            render_productLoadmore(json.data); 
        }
        if(json.code == 300) {
            $('.productbycategoryloadmore').prop('disabled', true);
            _message(json);
        }
    });
});
