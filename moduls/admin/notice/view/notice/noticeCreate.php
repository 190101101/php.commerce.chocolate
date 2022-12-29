<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a href="#forall" data-toggle="tab">
                <img src="../resources/files/system/svg/update.svg">
                <span>notice for all</span>
            </a>
        </li>

        <li>
            <a>
            <a href="#foruser" data-toggle="tab">
                <img src="../resources/files/system/svg/update.svg">
                <span>notice for user</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/admin/notice/create" method="POST" class="general_form" enctype="multipart/form-data"> -->
<div class="tab-content tab_border">
    <div class="tab-pane active" id="forall">
        <form class="general_form notice_create_all">
            <div class="form_box">
                <label>title</label>
                <input type="text" name="notice_message" placeholder="title" required>
            </div>

            <div class="form_box">
                <label>message</label>
                <input type="text" name="notice_body" placeholder="message" required>
                <input type="hidden" name="notice_type" value="all" required readonly>
            </div>

            <div class="form_box">
                <button>create notice for all</button>
            </div>
        </form>
    </div>

    <div class="tab-pane" id="foruser">
        <form class="general_form notice_create_user">
            <div class="form_box">
                <label>user id</label>
                <input type="text" name="user_id" placeholder="user id" required>
            </div>

            <div class="form_box">
                <label>title</label>
                <input type="text" name="notice_message" placeholder="title" required>
            </div>

            <div class="form_box">
                <label>message</label>
                <input type="text" name="notice_body" placeholder="message" required>
                <input type="hidden" name="notice_type" value="user" required readonly>
            </div>

            <div class="form_box">
                <button>create notice for user</button>
            </div>
        </form>
    </div>
</div>