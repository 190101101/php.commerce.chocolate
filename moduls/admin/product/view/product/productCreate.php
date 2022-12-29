<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>product create</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/admin/product/create" method="POST" class="general_form"> -->
<form class="general_form product_create">

    <div class="form_box">
        <input type="file" name="product_image" id="archivefile" onchange="fileupload()">
    </div>

    <div class="form_box tag_progress">
        <progress class="tagprogress" id="progressBar" value="0" max="100"></progress>
        <span id="uploadstatus">отчет загруженных файлов</span>
    </div>

    <div class="form_box">
        <label>product name</label>
        <input type="text" name="product_name" placeholder="product name" required>
    </div>

    <div class="form_box">
        <label>product price</label>
        <input type="text" name="product_price" placeholder="product price" required>
    </div>

    <div class="form_box">
        <label>product stock</label>
        <input type="number" name="product_stock" placeholder="product stock" required>
    </div>

    <div class="form_box">
        <label>product portion</label>
        <input type="text" name="product_portion" placeholder="product portion" required>
    </div>

    <div class="form_box">
        <label>category</label>
        <select name="category_id">
            <?php foreach($data->category as $category): ?>
                <option value="<?php echo $category->category_id; ?>">
                    <?php echo $category->category; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form_box">
        <textarea name="product_about" placeholder="product about" class="small" required></textarea>
    </div>

    <div class="form_box">
        <textarea name="product_description" placeholder="product description" class="small" required></textarea>
    </div>

    <div class="form_box">
        <textarea name="product_content" placeholder="product content" class="middle" required></textarea>
    </div>

    <div class="form_box">
        <button>create product</button>
    </div>
</form>

