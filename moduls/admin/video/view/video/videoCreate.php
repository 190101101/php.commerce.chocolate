<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>create video</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/admin/video/create" method="POST" class="general_form" enctype="multipart/form-data"> -->
<form class="general_form video_create">
    <div class="form_box">
        <input type="file" name="video_image"  id="archiveimage" onchange="imageupload()" required>
    </div>

    <div class="form_box tag_progress">
        <progress class="tagprogress" id="progressBarimage" value="0" max="100"></progress>
        <span id="uploadstatusimage">отчет загруженных файлов</span>
    </div>

    <div class="form_box">
        <input type="file" name="video_video" id="archivefile" onchange="fileupload()" required>
    </div>

    <div class="form_box tag_progress">
        <progress class="tagprogress" id="progressBar" value="0" max="100"></progress>
        <span id="uploadstatus">отчет загруженных файлов</span>
    </div>

    <div class="form_box">
        <label>video type</label>
        <select name="video_type" required>
            <option value="gallery">gallery</option>
            <option value="main">main</option>
        </select>
    </div>

    <div class="form_box">
        <button>video create</button>
    </div>
</form>
