function _status(route, arg)
{
    $.ajax({
        type: "POST",
        url: '/admin/'+route+'/status/' + $(arg)[0].getAttribute('id'),
        success: function(message){
            _message(JSON.parse(message));
        }
    });
}

$('body').on('change', '.user_status', function() {
    _status('user', this);
});

$('body').on('change', '.blog_status', function() {
    _status('blog', this);
});

$('body').on('change', '.product_status', function() {
    _status('product', this);
});

$('body').on('change', '.category_status', function() {
    _status('category', this);
});

$('body').on('change', '.orders_status', function() {
    _status('orders', this);
});

$('body').on('change', '.comment_status', function() {
    _status('comment', this);
});

