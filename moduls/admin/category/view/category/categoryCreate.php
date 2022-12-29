<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>category create</span>
            </a>
        </li>
    </ul>
</div>

<form class="general_form category_create">

    <div class="form_box">
        <input type="file" name="category_image" id="archivefile" onchange="fileupload()">
    </div>

    <div class="form_box tag_progress">
        <progress class="tagprogress" id="progressBar" value="0" max="100"></progress>
        <span id="uploadstatus">отчет загруженных файлов</span>
    </div>

    <div class="form_box">
        <label>category</label>
        <input type="text" name="category" placeholder="category" required>
    </div>

    <div class="form_box">
        <label>title</label>
        <input type="text" name="category_title" placeholder="title" required>
    </div>

    <div class="form_box">
        <label>sub title</label>
        <input type="text" name="category_subtitle" placeholder="sub title" required>
    </div>

    <div class="form_box">
        <textarea name="category_description" placeholder="category description" class="small" required></textarea>
    </div>

    <div class="form_box">
        <textarea name="category_content" placeholder="category content" class="big" required></textarea>
    </div>

    <div class="form_box">
        <button>click</button>
    </div>
</form>

