<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>blog create</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/admin/blog/create" method="POST" class="general_form" enctype="multipart/form-data"> -->
<form class="general_form blog_create">

    <div class="form_box">
        <input type="file" name="blog_image" id="archivefile" onchange="fileupload()">
    </div>
    
    <div class="form_box tag_progress">
        <progress class="tagprogress" id="progressBar" value="0" max="100"></progress>
        <span id="uploadstatus">отчет загруженных файлов</span>
    </div>

    <div class="form_box">
        <label>title</label>
        <input type="text" name="blog_title" placeholder="title" required>
    </div>

    <div class="form_box">
        <label>sub title</label>
        <input type="text" name="blog_subtitle" placeholder="sub title" required>
    </div>

    <div class="form_box">
        <textarea name="blog_content" placeholder="blog content" class="middle" required></textarea>
    </div>

    <div class="form_box">
        <button>create blog</button>
    </div>
</form>

