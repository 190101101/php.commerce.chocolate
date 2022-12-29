<?php $blog = $data->blog; ?>
<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>blog update</span>
            </a>
        </li>
    </ul>
</div>

    <!-- <form action="/admin/blog/update/<?php echo $blog->blog_id; ?>" method="POST" class="general_form"> -->
    <form class="general_form blog_update">

        <div class="form_box">
            <input type="file" name="blog_image" id="archivefile" onchange="fileupload()">
        </div>

        <div class="form_box tag_progress">
            <progress class="tagprogress" id="progressBar" value="0" max="100"></progress>
            <span id="uploadstatus">uploaded files report</span>
        </div>

        <div class="form_box">
            <label>title</label>
            <input type="text" name="blog_title" value="<?php echo $blog->blog_title; ?>" required>
        </div>

        <div class="form_box">
            <label>subtitle</label>
            <input type="text" name="blog_subtitle" value="<?php echo $blog->blog_subtitle; ?>" required>
        </div>

        <div class="form_box">
            <label>last update</label>
            <input type="text" name="blog_updated_at" value="<?php echo $blog->blog_updated_at; ?>" readonly required>
        </div>

        <div class="form_box">
            <label>created at</label>
            <input value="<?php echo $blog->blog_created_at; ?>" readonly required>
            <input type="hidden" name="blog_id" value="<?php echo $blog->blog_id; ?>" readonly required>
            <input type="hidden" name="image_delete" value="<?php echo $blog->blog_image; ?>" readonly>
            <input type="hidden" name="blog_updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly>
        </div>

        <div class="form_box">
            <textarea name="blog_content" class="middle" required><?php echo $blog->blog_content; ?></textarea>
        </div>

        <div class="form_box">
            <button>update blog</button>
        </div>
        
        <div class="form_image_box">
            <img src="/resources/files/upload/blog/<?php echo $blog->blog_image; ?>">
        </div>
    
    </form>



