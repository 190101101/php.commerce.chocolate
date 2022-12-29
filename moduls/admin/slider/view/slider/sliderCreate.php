<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>slider create</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/admin/slider/create" method="POST" class="general_form" enctype="multipart/form-data"> -->
<form class="general_form slider_create">
    <div class="form_box">
        <input type="file" name="slider_image[]" multiple id="archivefile" onchange="fileupload()">
    </div>
    <div class="form_box tag_progress">
        <progress class="tagprogress" id="progressBar" value="0" max="100"></progress>
        <span id="uploadstatus">отчет загруженных файлов</span>
    </div>
    <div class="form_box">
        <button>slider create</button>
    </div>
</form>

