<div class="general-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a href="#tab_info" data-toggle="tab">
                <img src="../resources/files/system/svg/user.svg">
                <span>info</span>
            </a>
        </li>
        <li>
            <a href="#tab_password" data-toggle="tab">
                <img src="../resources/files/system/svg/user.svg">
                <span>пароль</span>
            </a>
        </li>
    </ul>
</div>

<div class="tab-content">
    <div class="tab-pane active" id="tab_info">
        <!-- <form action="/profile/update/info" method="POST" class="general_form"> -->
        <form class="general_form profile_info_form">
            <div class="form_box">
                <label>user email</label>
                <input type="email" value="<?php echo get_user_email(); ?>" required readonly>
            </div>

            <div class="form_box">
                <label>user login</label>
                <input value="<?php echo get_user_login(); ?>" required readonly>
            </div>

            <div class="form_box">
                <label>user phone</label>
                <input type="text" name="user_phone" value="<?php echo get_user_phone(); ?>" required>
            </div>

            <div class="form_box">
                <label>user address</label>
                <input type="text" name="user_address" value="<?php echo get_user_address(); ?>" required>
            </div>

            <div class="form_box">
                <label>ip address</label>
                <input type="text" value="<?php echo get_user_ip(); ?>" required readonly>
            </div>

            <div class="form_box">
                <label>user updated at</label>
                <input type="text" value="<?php echo get_user_updated(); ?>" required readonly>
            </div>

            <div class="form_box">
                <label>user created at</label>
                <input type="text" value="<?php echo get_user_created(); ?>" required readonly>
            </div>

            <div class="form_box">
                <button>update profile</button>
            </div>
        </form>
    </div>
    <div class="tab-pane" id="tab_password">
        <!-- <form action="/profile/update/password" method="POST" class="general_form"> -->
        <form class="general_form profile_password_form">
            <div class="form_box">
                <label>current password</label>
                <input type="text" value="<?php echo get_user_password(); ?>" required readonly>
            </div>

            <div class="form_box">
                <label>new password</label>
                <input type="text" name="new_password" placeholder="confirm password" required>
            </div>

            <div class="form_box">
                <label>confirm password</label>
                <input type="text" name="confirm_password" placeholder="confirm password" required>
            </div>

            <div class="form_box">
                <button>update password</button>
            </div>
        </form>
    </div>
</div>


