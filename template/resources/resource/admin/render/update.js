function render_user_update(json)
{
    $('.user_update').html(` 
        <div class="form_box">
            <label>email</label>
            <input type="text" name="user_email" value="${json.user_email}">
        </div>

        <div class="form_box">
            <label>login</label>
            <input type="text" name="user_login" value="${json.user_login}">
        </div>

        <div class="form_box">
            <label>password</label>
            <input type="text" name="user_password" value="${json.user_password}">
        </div>

        <div class="form_box">
            <label>user type</label>
            <select name="user_level">
                <option value="${json.user_level}">${json.user_type}</option>
            </select>
        </div>

        <div class="form_box">
            <label>bank card</label>
            <input type="text" name="user_card" value="${json.user_card}">
        </div>

        <div class="form_box">
            <label>phone</label>
            <input type="text" name="user_phone" value="${json.user_phone}">
        </div>

        <div class="form_box">
            <label>address</label>
            <input type="text" name="user_address" value="${json.user_address}">
        </div>

        <div class="form_box">
            <label>ip</label>
            <input type="text" name="user_ip" value="${json.user_ip}">
        </div>

        <div class="form_box">
            <label>updated at</label>
            <input type="text" name="user_updated_at" value="${json.user_updated_at}">
        </div>

        <div class="form_box">
            <label>created at</label>
            <input value="${json.user_created_at}" readonly>
            <input type="hidden" name="user_id" value="${json.user_id}" readonly>
        </div>

        <div class="form_box">
            <button>user update</button>
        </div>
    `);

    $('.table-media tr').find("a[data-id='"+ json.user_id +"']").parents('.table-media tr').html(`
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
        <td aria-label='password'>${json.user_password}</td>
        <td aria-label='ip'>${json.user_ip}</td>
        <td aria-label='status'>
            <label class="switch">
            <input type="checkbox" class="user_status" id="${json.user_id}" checked> 
                <span class="slider round"></span>
            </label>
        </td>
        <td aria-label='type'>${json.user_type}</td>
    `);
}

function render_blog_update(json)
{
    $('.blog_update').html(` 
        <div class="form_box">
            <input type="file" name="blog_image">
        </div>

        <div class="form_box">
            <label>title</label>
            <input type="text" name="blog_title" value="${json.blog_title}">
        </div>

        <div class="form_box">
            <label>last update</label>
            <input type="text" name="blog_updated_at" value="${json.blog_updated_at}" readonly>
        </div>

        <div class="form_box">
            <label>created at</label>
            <input value="${json.blog_created_at}" readonly>
            <input type="hidden" name="blog_id" value="${json.blog_id}" readonly>
            <input type="hidden" name="image_delete" value="${json.blog_image}" readonly>
        </div>

        <div class="form_box">
            <textarea name="blog_content">${json.blog_content}</textarea>
        </div>

        <div class="form_box">
            <button>blog update</button>
        </div>

        <div class="form_image_box">
            <img src="/resources/files/upload/blog/${json.blog_image}">
        </div>
    `);

    $('.table-media tr').find("a[data-id='"+ json.blog_id +"']").parents('.table-media tr').html(`
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
        <td aria-label='category'>${json.blog_category}</td>
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
    `);
}


function render_product_update(json)
{
    $('.product_update').html(` 
        <div class="form_box">
            <input type="file" name="product_image">
        </div>

        <div class="form_box">
            <label>product name</label>
            <input type="text" name="product_name" value="${json.product_name}" required>
        </div>

        <div class="form_box">
            <label>product price</label>
            <input type="text" name="product_price" value="${json.product_price}" required>
        </div>

        <div class="form_box">
            <label>product stock</label>
            <input type="number" name="product_stock" value="${json.product_stock}" required>
        </div>

        <div class="form_box">
            <label>product portion</label>
            <input type="text" name="product_portion" value="${json.product_portion}" required>
        </div>

        <div class="form_box">
            <label>category</label>
            <select name="category_id">
                    <option value="${json.category_id}">
                        ${json.category}
                    </option>
            </select>
        </div>

        <div class="form_box">
            <label>updated at</label>
            <input type="text" name="product_updated_at" value="${json.product_updated_at}" readonly required>
        </div>

        <div class="form_box">
            <label>created at</label>
            <input value="${json.product_created_at}" readonly required>
            <input type="hidden" name="product_id" value="${json.product_id}" readonly required>
            <input type="hidden" name="image_delete" value="${json.product_image}" readonly>
        </div>

        <div class="form_box">
            <textarea name="product_about" class="small" required>${json.product_about}</textarea>
        </div>

        <div class="form_box">
            <textarea name="product_description" class="small" required>${json.product_description}</textarea>
        </div>

        <div class="form_box">
            <textarea name="product_content" class="big" required>${json.product_content}</textarea>
        </div>

        <div class="form_box">
            <button>product update</button>
        </div>

        <div class="form_image_box">
            <img src="/resources/files/upload/product/${json.product_image}">
        </div>
    `);

    $('.table-media tr').find("a[data-id='"+ json.product_id +"']").parents('.table-media tr').html(`
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
        <td aria-label='comment'>
            <a data-id="${json.product_id}" class="comment_read">
                <img src="/resources/files/system/svg/comment.svg">
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
                checked
                type="checkbox" 
                class="product_status" 
                id="${json.product_id}">
            <span class="slider round"></span>
            </label>
        </td>
        <td aria-label='created'>${json.product_created_at}</td>
    `);
}



function render_category_update(json)
{
    $('.category_update').html(` 
        <div class="form_box">
            <input type="file" name="category_image">
        </div>

        <div class="form_box">
            <label>category</label>
            <input type="text" name="category" value="${json.category}" required>
        </div>


        <div class="form_box">
            <label>title</label>
            <input type="text" name="category_title" value="${json.category_title}" required>
        </div>

        <div class="form_box">
            <label>subtitle</label>
            <input type="text" name="category_subtitle" value="${json.category_subtitle}" required>
        </div>

        <div class="form_box">
            <label>last update</label>
            <input type="text" name="category_updated_at" value="${json.category_updated_at}" readonly required>
        </div>

        <div class="form_box">
            <label>created at</label>
            <input value="${json.category_created_at}" readonly required>
            <input type="hidden" name="category_id" value="${json.category_id}" readonly required>
            <input type="hidden" name="image_delete" value="${json.category_image}" readonly>
        </div>

        <div class="form_box">
            <textarea name="category_description" value="${json.category_description}" class="small" required>
                ${json.category_description}
            </textarea>
        </div>

        <div class="form_box">
            <textarea name="category_content" class="big" required>${json.category_content}</textarea>
        </div>

        <div class="form_box">
            <button>category update</button>
        </div>

        <div class="form_image_box">
            <img src="/resources/files/upload/category/${json.category_image}">
        </div>
    `);

    $('.table-media tr').find("a[data-id='"+ json.category_id +"']").parents('.table-media tr').html(`
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
    `);
}

function render_setting_update(json)
{
    $('.setting_update').html(` 
        <div class="form_box">
            <label>setting description</label>
            <input type="text" name="setting_description" value="${json.setting_description}" required>
        </div>

        <div class="form_box">
            <label>setting key</label>
            <input type="text" name="setting_key" value="${json.setting_key}" required>
        </div>

        <div class="form_box">
            <textarea name="setting_value" class="middle" required>${json.setting_value}</textarea>
            <input type="hidden" name="setting_id" value="${json.setting_id}" readonly required>
            <input type="hidden" name="setting_updated_at" value="${json.setting_updated_at}" readonly required>
        </div>

        <div class="form_box">
            <button>setting update</button>
        </div>
    `);

    $('.table-media tr').find("a[data-id='"+ json.setting_id +"']").parents('.table-media tr').html(`
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
    `);
}
