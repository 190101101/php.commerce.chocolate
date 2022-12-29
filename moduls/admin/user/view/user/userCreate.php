<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>user create</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/panel/user/create" method="POST" class="general_form" enctype="multipart/form-data"> -->
<form class="general_form user_create">
    
    <div class="form_box">
        <label>email</label>
        <input type="email" name="user_email" placeholder="email" required>
    </div>

    <div class="form_box">
        <label>login</label>
        <input type="text" name="user_login" placeholder="login" required>
    </div>

    <div class="form_box">
        <label>user type</label>
        <select name="user_level" required>
            <option value="1">user</option>
            <option value="2">moderator</option>
        </select>
    </div>

    <div class="form_box">
        <label>phone</label>
        <input type="text" name="user_phone" placeholder="phone number">
    </div>

    <div class="form_box">
        <label>address</label>
        <input type="text" name="user_address" placeholder="user address">
    </div>

    <div class="form_box">
        <label>new password</label>
        <input type="text" name="user_password" placeholder="confirm password" required>
    </div>

    <div class="form_box">
        <label>confirm password</label>
        <input type="text" name="confirm_password" placeholder="confirm password" required>
    </div>

    <div class="form_box">
        <button>create</button>
    </div>

</form>
