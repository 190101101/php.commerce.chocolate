function _status(route, arg)
{
    $.ajax({
        beforeSend: function(){
            $('.loader').css("opacity", '1');
        },
        type: "POST",
        url: '/panel/'+route+'/status/' + $(arg)[0].getAttribute('id'),
        complete: function(){
            $('.loader').css("opacity", '0');
        },
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

$('body').on('change', '.comment_status', function() {
    _status('comment', this);
});

$('body').on('change', '.guest_status', function() {
    _status('guest', this);
});

