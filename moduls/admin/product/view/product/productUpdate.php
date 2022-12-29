<?php $product = $data->product; ?>
<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>product update</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/admin/product/update" method="POST" class="general_form" enctype="multipart/form-data"> -->
<form class="general_form product_update">

    <div class="form_box">
        <input type="file" name="product_image" id="archivefile" onchange="fileupload()">
    </div>

    <div class="form_box tag_progress">
        <progress class="tagprogress" id="progressBar" value="0" max="100"></progress>
        <span id="uploadstatus">отчет загруженных файлов</span>
    </div>

    <div class="form_box">
        <label>product name</label>
        <input type="text" name="product_name" value="<?php echo $product->product_name ;?>" required>
    </div>

    <div class="form_box">
        <label>product price</label>
        <input type="text" name="product_price" value="<?php echo $product->product_price ;?>" required>
    </div>

    <div class="form_box">
        <label>product stock</label>
        <input type="number" name="product_stock" value="<?php echo $product->product_stock ;?>" required>
    </div>

    <div class="form_box">
        <label>product portion</label>
        <input type="text" name="product_portion" value="<?php echo $product->product_portion ;?>" required>
    </div>

    <div class="form_box">
        <label>category</label>
        <select name="category_id">
                <option value="<?php echo $product->category_id; ?>">
                    <?php echo $product->category; ?>
                </option>
            <?php foreach($data->category as $category): ?>
                <option value="<?php echo $category->category_id; ?>">
                    <?php echo $category->category; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="form_box">
        <label>updated at</label>
        <input value="<?php echo $product->product_updated_at; ?>" readonly required>
    </div>

    <div class="form_box">
        <label>created at</label>
        <input value="<?php echo $product->product_created_at; ?>" readonly required>
    </div>

    <div class="form_box">
        <textarea name="product_about" class="small" required><?php echo $product->product_about ;?></textarea>
    </div>

    <div class="form_box">
        <textarea name="product_description" class="small" required><?php echo $product->product_description ;?></textarea>
    </div>

    <div class="form_box">
        <textarea name="product_content" class="middle" required><?php echo $product->product_content ;?></textarea>
        <input type="hidden" name="product_id" value="<?php echo $product->product_id; ?>" readonly required>
        <input type="hidden" name="image_delete" value="<?php echo $product->product_image; ?>" readonly>
    </div>

    <div class="form_box">
        <button>update product</button>
    </div>

    <div class="form_image_box">
        <?php if(!empty($product->product_image)): ?>
            <img src="/resources/files/upload/product/<?php echo $product->product_image; ?>">
        <?php else: ?>
            <img src="/resources/files/system/svg/image.png">
        <?php endif; ?>
    </div>

</form>


    
