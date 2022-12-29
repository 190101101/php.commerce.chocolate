function render_notice_create(json)
{
    $('.table-media').prepend(` 
        <tr>
            <td aria-label='delete'>
                <a data-id="${json.notice_id}" class="notice_del">
                    <img src="/resources/files/system/svg/delete.svg">
                </a>
            </td>
            <td aria-label='#'>${json.notice_id}</td>
            <td aria-label='title'>${json.notice_message}</td>
            <td aria-label='message'>${json.notice_body}</td>
            <td aria-label='status'>
                <label class="switch">
                    <input disabled type="checkbox" class="notice_status" checked>
                    <span class="slider round"></span>
                </label>
            </td>
            <td aria-label='created'>${json.notice_created_at}</td>
         </tr>
    `);
}

function render_user_create(json)
{
    $('.table-media').prepend(` 
        <tr>
            <td aria-label='delete'>
                <a data-id="${json.user_id}" class="user_del">
                    <img src="/resources/files/system/svg/delete.svg">
                </a>
            </td>
            <td aria-label='update'>
                <a data-id="${json.user_id}" class="user_up">
                    <img src="/resources/files/system/svg/update.svg">
                </a>
            </td>
            <td aria-label='#'>${json.user_id}</td>
            <td aria-label='login'>${json.user_login}</td>
            <td aria-label='email'>${json.user_email}</td>
            <td aria-label='ip'>${json.user_ip}</td>
            <td aria-label='status'>
                <label class="switch">
                <input type="checkbox" class="user_status" id="${json.user_id}" checked> 
                    <span class="slider round"></span>
                </label>
            </td>
            <td aria-label='type'>${json.user_type}</td>
            <td aria-label='updated'>${json.user_updated_at}</td>
        </tr>
    `);
}

function render_blog_create(json)
{
    $('.table-media').prepend(` 
        <tr>
            <td aria-label='delete'>
                <a data-id="${json.blog_id}" class="blog_del">
                    <img src="/resources/files/system/svg/delete.svg">
                </a>
            </td>
            <td aria-label='update'>
                <a data-id="${json.blog_id}" class="blog_up">
                    <img src="/resources/files/system/svg/update.svg">
                </a>
            </td>
            <td aria-label='#'>${json.blog_id}</td>
            <td aria-label='image'>
                <img src="/resources/files/upload/blog/${json.blog_image}">
            </td>
            <td aria-label='title'>${json.blog_title}</td>
            <td aria-label='subtitle'>${json.blog_subtitle}</td>
            <td aria-label='content'>${json.blog_content.substring(0, 50)}...</td>
            <td aria-label='status'>
                <label class="switch">
                <input 
                    checked
                    type="checkbox" 
                    class="blog_status" 
                    id="${json.blog_id}">
                <span class="slider round"></span>
                </label>
            </td>
            <td aria-label='created'>${json.blog_created_at}</td>
        </tr>
    `);
}

function render_product_create(json)
{
    $('.table-media').prepend(` 
        <tr>
            <td aria-label='delete'>
                <a data-id="${json.product_id}" class="product_del">
                    <img src="/resources/files/system/svg/delete.svg">
                </a>
            </td>
            <td aria-label='update'>
                <a data-id="${json.product_id}" class="product_up">
                    <img src="/resources/files/system/svg/update.svg">
                </a>
            </td>
            <td aria-label='image'>
                <a data-id="${json.product_id}" class="image_read">
                    <img src="/resources/files/system/svg/file.svg">
                </a>
            </td>
            <td aria-label='#'>${json.product_id}</td>
            <td aria-label='image'>
                <img src="/resources/files/upload/product/${json.product_image}">
            </td>
            <td aria-label='name'>${json.product_name}</td>
            <td aria-label='price'>${json.product_price}</td>
            <td aria-label='stock'>${json.product_stock}</td>
            <td aria-label='status'>
                <label class="switch">
                <input 
                    type="checkbox" 
                    class="product_status" 
                    id="${json.product_id}" checked>
                <span class="slider round"></span>
                </label>
            </td>
            <td aria-label='created'>${json.product_created_at}</td>
        </tr>
    `);
}

function render_gallery_create(json)
{
    json.forEach((element) => {
        $('.table-media').prepend(` 
            <tr>
                <td aria-label='delete'>
                    <a data-id="${element.gallery_id}" class="gallery_del">
                        <img src="/resources/files/system/svg/delete.svg">
                    </a>
                </td>
                <td aria-label='#'>${element.gallery_id}</td>
                <td aria-label='gallery'>
                    <img src='/resources/files/upload/gallery/${element.gallery_image}'>
                </td>
            </tr>
        `);
    });
}


function render_category_create(json)
{
    $('.table-media').prepend(` 
        <tr>
            <td aria-label='delete'>
                <a data-id="${json.category_id}" class="category_del">
                    <img src="/resources/files/system/svg/delete.svg">
                </a>
            </td>
            <td aria-label='update'>
                <a data-id="${json.category_id}" class="category_up">
                    <img src="/resources/files/system/svg/update.svg">
                </a>
            </td>
            <td aria-label='#'>${json.category_id}</td>
            <td aria-label='image'>
                <img src="/resources/files/upload/category/${json.category_image}">
            </td>
            <td aria-label='category'>${json.category}</td>
            <td aria-label='title'>${json.category_title}</td>
            <td aria-label='subtitle'>${json.category_subtitle}</td>
            <td aria-label='status'>
                <label class="switch">
                <input 
                    type="checkbox" 
                    class="category_status" 
                    id="${json.category_id}"
                    checked>
                <span class="slider round"></span>
                </label>
            </td>
            <td aria-label='created'>${json.category_created_at}</td>
         </tr>
    `);
}


function render_setting_create(json)
{
    $('.table-media').prepend(` 
        <tr>
            <td aria-label='delete'>
                <a data-id="${json.setting_id}" class="setting_del">
                    <img src="/resources/files/system/svg/delete.svg">
                </a>
            </td>
            <td aria-label='update'>
                <a data-id="${json.setting_id}" class="setting_up">
                    <img src="/resources/files/system/svg/update.svg">
                </a>
            </td>
            <td aria-label='#'>${json.setting_id}</td>
            <td aria-label='desc'>${json.setting_description}</td>
            <td aria-label='key'>${json.setting_key}</td>
            <td aria-label='value'>${json.setting_value}</td>
        </tr>
    `);
}

function render_image_create(json)
{
    json.forEach((element) => {
        $('.image-history-table').prepend(` 
             <tr>
                <td aria-label='delete'>
                    <a data-id="${element.image_id}" class="image_del">
                        <img src="/resources/files/system/svg/delete.svg">
                    </a>
                </td>
                <td aria-label='image'>
                    <img src="/resources/files/upload/image/${element.image_image}">
                </td>
                <td aria-label='update'>
                    <a data-id="${element.image_id}"
                        type="button" class="image_btn" data-toggle="modal" data-target="#mainmodal">
                        <img src="/resources/files/system/svg/update.svg">
                    </a>
                </td>
             </tr>
        `);
    });
}



function render_slider_create(json)
{
    json.forEach((element) => {
        $('.table-media').prepend(` 
            <tr>
                <td aria-label='delete'>
                    <a data-id="${element.slider_id}" class="slider_del">
                        <img src="/resources/files/system/svg/delete.svg">
                    </a>
                </td>
                <td aria-label='#'>${element.slider_id}</td>
                <td aria-label='slider'>
                    <img src='/resources/files/upload/slider/${element.slider_image}'>
                </td>
            </tr>
        `);
    });
}

function render_orders_total(json)
{
    $('.orders_total_price').html(`${json} $`);
}

function render_video_create(json)
{
    $('.table-media').prepend(` 
        <tr>
            <td aria-label='delete'>
                <a data-id="${json.video_id}" class="video_del">
                    <img src="/resources/files/system/svg/delete.svg">
                </a>
            </td>
            <td aria-label='#'>${json.video_id}</td>
            <td aria-label='type'>${json.video_type}</td>
            <td aria-label='image'>
                <img src="/resources/files/upload/video/${json.video_image}">
            </td>
            <td aria-label='video'>
                <a data-id="${json.video_id}"
                    type="button" class="video_btn" data-toggle="modal" data-target="#mainmodal">
                    <img src="/resources/files/system/svg/videolink.svg">
                </a>
            </td>
        </tr>
    `);
}
