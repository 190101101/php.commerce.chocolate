<?php 

use core\app;
// ([0-9a-zA-Z-_]+)
// ([0-9a-zA-Z -_]+)

/*home*/
app::get('/', '/home/index');
app::get('/home', '/home/index');

/*gallery*/
app::get('/gallery', '/gallery/gallery');
app::get('/gallery/LoadMore/([0-9]+)', '/gallery/galleryLoadMore');

/*error*/
app::get('/404', '/error/_404');
app::get('/pageNotFound', '/error/pageNotFound');

/*sign*/
app::get('/signin', '/sign/signin', 'main', ['notlogin']);
app::post('/signin', '/sign/__signin', 'main', ['notlogin']);
app::get('/signin', '/sign/signin', 'main', ['notlogin']);
app::get('/signup', '/sign/signup', 'main', ['notlogin']);
app::post('/signup', '/sign/__signup', 'main', ['notlogin']);
app::get('/signin/fail', '/sign/_signin', 'main', ['notlogin']);
app::get('/signout', '/sign/_signout', 'main', ['login']);


/*shop*/
app::get('/shop', '/shop/shopProduct');
app::get('/shop/LoadMore/([0-9]+)', '/shop/shopProductLoadMore/([0-9]+)');

app::get('/shop/category/([0-9a-zA-Z-_]+)', '/shop/productByCategory/([0-9a-zA-Z-_]+)');
app::get('/shop/product/([0-9]+)', '/shop/product/([0-9]+)');
app::get('/ProductByCategory/LoadMore/([0-9]+)/([0-9]+)', '/shop/ProductByCategoryLoadMore/([0-9]+)/([0-9]+)');


/*lists*/
app::get('/list', '/lists/lists');

/*profile*/
app::get('/profile', '/profile/profile', 'main', ['signIn']);
app::post('/profile/update/info', '/profile/__profileInfoUpdate', 'main', ['signIn']);
app::post('/profile/update/password', '/profile/__profilePasswordUpdate', 'main', ['signIn']);

/*buy*/
app::get('/buy', '/buy/buy');
app::get('/buy/read/([0-9]+)', '/buy/buyRead/([0-9]+)');

/*error*/
app::get('/error/spam/request', '/error/request');

/*blog*/
app::get('/blog/p/([0-9]+)', '/blog/blog');
app::get('/blog/article/([0-9a-zA-Z-_]+)', '/blog/article/([0-9a-zA-Z-_]+)');

/*category*/
app::get('/category/p/([0-9]+)', '/category/category');


/*search*/
app::post('/search', '/search/searchLoad');
app::get('/search/p/([0-9a-zA-Z-_]+)', '/search/search/([0-9a-zA-Z-_]+)');

/*cart*/
app::get('/cart', '/cart/cart');
app::get('/cart/add/([0-9]+)', '/cart/_add/([0-9]+)', 'main', ['cart']);
app::get('/cart/update/([0-9]+)', '/cart/_update/([0-9]+)', 'main', ['cart']);
app::post('/cart/update', '/cart/__update', 'main', ['cart']);
app::get('/cart/delete/([0-9]+)', '/cart/_delete/([0-9]+)', 'main', ['cart']);
app::get('/cart/drop', '/cart/_drop', 'main', ['cart']);
app::get('/cart/confirm', '/cart/_confirm', 'main', ['cart']);
app::get('/cart/payment', '/cart/_payment', 'main', ['cart']);
app::get('/cart/user/confirm', '/cart/userConfirm', 'main', ['cart']);


/*video*/
app::get('/video', '/video/video');
app::get('/video/LoadMore/([0-9]+)', '/video/videoLoadMore');
app::get('/video/videoLook/([0-9a-zA-Z-_]+)', '/video/videoLook/([0-9a-zA-Z-_]+)');
