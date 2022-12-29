function _delete(route, arg)
{
    // alertify.confirm('вы уверены?', function(){ 
        $(arg).parents('.table-media tr').hide();
        $.ajax({
            type: "GET",
            url: '/admin/'+route+'/delete/' + $(arg).attr("data-id"),
            success: function(message){
                _message(JSON.parse(message));
            }
        });
    // });
}

$('body').on('click', '.user_del',  function() {
    _delete('user', this);
});

$('body').on('click', '.blog_del',  function() {
    _delete('blog', this);
});

$('body').on('click', '.product_del',  function() {
    _delete('product', this);
});

$('body').on('click', '.gallery_del',  function() {
    _delete('gallery', this);
});

$('body').on('click', '.slider_del',  function() {
    _delete('slider', this);
});

$('body').on('click', '.category_del',  function() {
    _delete('category', this);
});

$('body').on('click', '.orders_del',  function() {
    _delete('orders', this);
});

$('body').on('click', '.store_del',  function() {
    _delete('store', this);
});

$('body').on('click', '.setting_del',  function() {
    _delete('setting', this);
});

$('body').on('click', '.comment_del',  function() {
    _delete('comment', this);
});

$('body').on('click', '.image_del',  function() {
    _delete('image', this);
});
