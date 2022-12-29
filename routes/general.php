<?php 

use core\app;
// ([0-9a-zA-Z-_]+)
// ([0-9a-zA-Z -_]+)

app::get('/dd', '/dd/dd', 'general');
app::get('/mail', '/dd/mail', 'general');

/*notice*/
app::get('/notice/user', '/general/noticeUser', 'general');
app::get('/notice/all', '/general/noticeAll', 'general');

/*lang*/
app::get('/lang/([0-9a-zA-Z-_]+)', '/general/lang/([0-9a-zA-Z-_]+)', 'general');



app::get('/dd/code/([0-9a-zA-Z-_]+)', '/dd/code/([0-9a-zA-Z-_]+)', 'general');
