function _delete(route, arg)
{
    alertify.confirm('вы уверены что хотите удалить???', function(){ 
        $(arg).parents('.table-media tr').hide();
        $.ajax({
            beforeSend: function(){
                $('.loader').css("opacity", '1');
            },
            type: "GET",
            url: '/panel/'+route+'/delete/' + $(arg).attr("data-id"),
            complete: function(){
                $('.loader').css("opacity", '0');
            },
            success: function(data){
                _message(JSON.parse(data));
            }
        });
    });
}

$('body').on('click', '.notice_del',  function() {
    _delete('notice', this);
});

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

$('body').on('click', '.guest_del',  function() {
    _delete('guest', this);
});

$('body').on('click', '.video_del',  function() {
    _delete('video', this);
});
