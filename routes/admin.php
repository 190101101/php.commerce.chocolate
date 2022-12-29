<?php 

use core\app;

/*admin*/
app::get('/panel/admin', '/admin/admin', 'admin', ['admin']);

/*user*/
app::get('/panel/user', '/user/user', 'admin', ['admin']);

app::get('/panel/user/create', '/user/userCreate', 'admin', ['admin']);
app::post('/panel/user/create', '/user/__userCreate', 'admin', ['admin']);

app::get('/panel/user/update/([0-9]+)', '/user/userUpdate/([0-9]+)', 'admin', ['admin']);
app::post('/panel/user/update', '/user/__userUpdate', 'admin', ['admin']);
app::post('/panel/user/status/([0-9]+)', '/user/__status/([0-9]+)', 'admin', ['admin']);

app::get('/panel/user/delete/([0-9]+)', '/user/_delete/([0-9]+)', 'admin', ['admin']);

/*guest*/
app::get('/panel/guest', '/guest/guest', 'admin', ['admin']);
app::post('/panel/guest/status/([0-9]+)', '/guest/__status/([0-9]+)', 'admin', ['admin']);
app::get('/panel/guest/delete/([0-9]+)', '/guest/_delete/([0-9]+)', 'admin', ['admin']);


/*blog*/
app::get('/panel/blog', '/blog/blog', 'admin', ['admin']);
app::get('/panel/blog/create', '/blog/blogCreate', 'admin', ['admin']);
app::post('/panel/blog/create', '/blog/__blogCreate', 'admin', ['admin']);

app::get('/panel/blog/update/([0-9]+)', '/blog/blogUpdate/([0-9]+)', 'admin', ['admin']);
app::post('/panel/blog/update', '/blog/__blogUpdate', 'admin', ['admin']);
app::post('/panel/blog/status/([0-9]+)', '/blog/__status/([0-9]+)', 'admin', ['admin']);

app::get('/panel/blog/delete/([0-9]+)', '/blog/_delete/([0-9]+)', 'admin', ['admin']);

/*product*/
app::get('/panel/product', '/product/product', 'admin', ['admin']);
app::get('/panel/product/category/([0-9a-zA-Z-_]+)', '/product/productByCategory/([0-9a-zA-Z-_]+)', 'admin', ['admin']);

app::get('/panel/product/create', '/product/productCreate', 'admin', ['admin']);
app::post('/panel/product/create', '/product/__productCreate', 'admin', ['admin']);

app::get('/panel/product/update/([0-9]+)', '/product/productUpdate/([0-9]+)', 'admin', ['admin']);
app::post('/panel/product/update', '/product/__productUpdate', 'admin', ['admin']);
app::post('/panel/product/status/([0-9]+)', '/product/__status/([0-9]+)', 'admin', ['admin']);

app::get('/panel/product/delete/([0-9]+)', '/product/_delete/([0-9]+)', 'admin', ['admin']);

/*image*/
app::get('/panel/image/product/all/([0-9]+)', '/image/imageByProduct/([0-9]+)', 'admin', ['admin']);
app::get('/panel/image/product/look/([0-9]+)', '/image/imageLook/([0-9]+)', 'admin', ['admin']);

app::get('/panel/image/create/([0-9]+)', '/image/imageCreate/([0-9]+)', 'admin', ['admin']);
app::post('/panel/image/create', '/image/__imageCreate', 'admin', ['admin']);

app::get('/panel/image/delete/([0-9]+)', '/image/_delete/([0-9]+)', 'admin', ['admin']);


/*gallery*/
app::get('/panel/gallery', '/gallery/gallery', 'admin', ['admin']);

app::get('/panel/gallery/create', '/gallery/galleryCreate', 'admin', ['admin']);
app::post('/panel/gallery/create', '/gallery/__galleryCreate', 'admin', ['admin']);

app::get('/panel/gallery/delete/([0-9]+)', '/gallery/_delete/([0-9]+)', 'admin', ['admin']);

/*slider*/
app::get('/panel/slider', '/slider/slider', 'admin', ['admin']);

app::get('/panel/slider/create', '/slider/sliderCreate', 'admin', ['admin']);
app::post('/panel/slider/create', '/slider/__sliderCreate', 'admin', ['admin']);

app::get('/panel/slider/delete/([0-9]+)', '/slider/_delete/([0-9]+)', 'admin', ['admin']);


/*category*/
app::get('/panel/category', '/category/category', 'admin', ['admin']);

app::get('/panel/category/create', '/category/categoryCreate', 'admin', ['admin']);
app::post('/panel/category/create', '/category/__categoryCreate', 'admin', ['admin']);

app::get('/panel/category/update/([0-9]+)', '/category/categoryUpdate/([0-9]+)', 'admin', ['admin']);
app::post('/panel/category/update', '/category/__categoryUpdate', 'admin', ['admin']);
app::post('/panel/category/status/([0-9]+)', '/category/__status/([0-9]+)', 'admin', ['admin']);

app::get('/panel/category/delete/([0-9]+)', '/category/_delete/([0-9]+)', 'admin', ['admin']);

/*orders*/
app::get('/panel/orders', '/orders/orders', 'admin', ['admin']);

app::get('/panel/orders/delivery/([0-9]+)', '/orders/ordersDelivery/([0-9]+)', 'admin', ['admin']);
app::post('/panel/orders/status/([0-9]+)', '/orders/__status/([0-9]+)', 'admin', ['admin']);

app::get('/panel/orders/delete/([0-9]+)', '/orders/_delete/([0-9]+)', 'admin', ['admin']);

app::get('/panel/orders/confirm/([0-9]+)', '/orders/_ordersConfirm/([0-9]+)', 'admin', ['admin']);
app::get('/panel/orders/mailer/([0-9]+)', '/orders/_ordersMailer/([0-9]+)', 'admin', ['admin']);
app::get('/panel/orders/buy/([0-9]+)', '/orders/_ordersBuy/([0-9]+)', 'admin', ['admin']);
app::get('/panel/orders/refuse/([0-9]+)', '/orders/_ordersRefuse/([0-9]+)', 'admin', ['admin']);

/*cart*/
app::post('/panel/cart/status/([0-9]+)', '/orders/__cartStatus/([0-9]+)', 'admin', ['admin']);

/*store*/
app::get('/panel/store', '/store/store', 'admin', ['admin']);

app::get('/panel/store/read/([0-9]+)', '/store/storeRead/([0-9]+)', 'admin', ['admin']);
app::post('/panel/store/status/([0-9]+)', '/store/__status/([0-9]+)', 'admin', ['admin']);

app::get('/panel/store/delete/([0-9]+)', '/store/_delete/([0-9]+)', 'admin', ['admin']);

app::get('/panel/store/confirm/([0-9]+)', '/store/_storeConfirm/([0-9]+)', 'admin', ['admin']);
app::get('/panel/store/refuse/([0-9]+)', '/store/_storeRefuse/([0-9]+)', 'admin', ['admin']);

/*buy*/
app::get('/panel/buy', '/buy/buy', 'admin', ['admin']);

app::get('/panel/buy/read/([0-9]+)', '/buy/buyRead/([0-9]+)', 'admin', ['admin']);
app::post('/panel/buy/status/([0-9]+)', '/buy/__status/([0-9]+)', 'admin', ['admin']);

app::get('/panel/buy/delete/([0-9]+)', '/buy/_delete/([0-9]+)', 'admin', ['admin']);



/*setting*/
app::get('/panel/setting', '/setting/setting', 'admin', ['admin']);

app::get('/panel/setting/create', '/setting/settingCreate', 'admin', ['admin']);
app::post('/panel/setting/create', '/setting/__settingCreate', 'admin', ['admin']);

app::get('/panel/setting/update/([0-9]+)', '/setting/settingUpdate/([0-9]+)', 'admin', ['admin']);
app::post('/panel/setting/update', '/setting/__settingUpdate', 'admin', ['admin']);

app::get('/panel/setting/delete/([0-9]+)', '/setting/_delete/([0-9]+)', 'admin', ['admin']);

/*video*/
app::get('/panel/video', '/video/video', 'admin', ['admin']);
app::get('/panel/video/videoLook/([0-9]+)', '/video/videoLook/([0-9]+)', 'admin', ['admin']);

app::get('/panel/video/create', '/video/videoCreate', 'admin', ['admin']);
app::post('/panel/video/create', '/video/__videoCreate', 'admin', ['admin']);

app::get('/panel/video/delete/([0-9]+)', '/video/_delete/([0-9]+)', 'admin', ['admin']);


/*notice*/
app::get('/panel/notice', '/notice/notice', 'admin', ['admin']);

app::get('/panel/notice/create', '/notice/noticeCreate', 'admin', ['admin']);
app::post('/panel/notice/create', '/notice/__noticeCreate', 'admin', ['admin']);

app::get('/panel/notice/delete/([0-9]+)', '/notice/_delete/([0-9]+)', 'admin', ['admin']);
