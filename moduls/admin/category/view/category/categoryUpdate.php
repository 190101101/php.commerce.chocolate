<?php $category = $data->category; ?>
<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>category update</span>
            </a>
        </li>
    </ul>
</div>

    <!-- <form action="/admin/category/update/<?php echo $category->category_id; ?>" method="POST" class="general_form"> -->
    <form class="general_form category_update">

        <div class="form_box">
            <input type="file" name="category_image" id="archivefile" onchange="fileupload()">
        </div>

        <div class="form_box tag_progress">
            <progress class="tagprogress" id="progressBar" value="0" max="100"></progress>
            <span id="uploadstatus">отчет загруженных файлов</span>
        </div>

        <div class="form_box">
            <label>category</label>
            <input type="text" name="category" value="<?php echo $category->category; ?>" required>
        </div>

        <div class="form_box">
            <label>title</label>
            <input type="text" name="category_title" value="<?php echo $category->category_title; ?>" required>
        </div>

        <div class="form_box">
            <label>subtitle</label>
            <input type="text" name="category_subtitle" value="<?php echo $category->category_subtitle; ?>" required>
        </div>

        <div class="form_box">
            <label>last update</label>
            <input type="text" name="category_updated_at" value="<?php echo $category->category_updated_at; ?>" readonly required>
        </div>

        <div class="form_box">
            <label>created at</label>
            <input value="<?php echo $category->category_created_at; ?>" readonly required>
            <input type="hidden" name="category_id" value="<?php echo $category->category_id; ?>" readonly required>
            <input type="hidden" name="image_delete" value="<?php echo $category->category_image; ?>" readonly>
        </div>

        <div class="form_box">
            <textarea name="category_description" class="small" required><?php echo $category->category_description; ?></textarea>
        </div>

        <div class="form_box">
            <textarea name="category_content" class="big" required><?php echo $category->category_content; ?></textarea>
        </div>


        <div class="form_box">
            <button>click</button>
        </div>
        
        <div class="form_image_box">
            <img src="/resources/files/upload/category/<?php echo $category->category_image; ?>">
        </div>
    
    </form>



