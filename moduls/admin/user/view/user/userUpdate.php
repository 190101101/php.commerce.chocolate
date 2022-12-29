<?php $user = $data->user; ?>
<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>user update</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/panel/user/update" method="POST" class="general_form"> -->
<form class="general_form user_update">
    
    <div class="form_box">
        <label>email</label>
        <input type="text" name="user_email" value="<?php echo $user->user_email; ?>" required readonly>
    </div>

    <div class="form_box">
        <label>login</label>
        <input type="text" name="user_login" value="<?php echo $user->user_login; ?>" required readonly> 
    </div>

    <div class="form_box">
        <label>user type</label>
        <select name="user_level" required>
            <option value="<?php echo $user->user_level; ?>">
                <?php echo $user->user_level == 1 ? 'user' : 'moderator'; ?>
            </option>
            <option value="1">user</option>
            <option value="2">moderator</option>
        </select>
    </div>

    <div class="form_box">
        <label>phone</label>
        <input type="text" name="user_phone" value="<?php echo $user->user_phone; ?>">
    </div>

    <div class="form_box">
        <label>address</label>
        <input type="text" name="user_address" value="<?php echo $user->user_address; ?>">
    </div>

    <div class="form_box">
        <label>password</label>
        <input type="text" name="user_password" value="<?php echo $user->user_password; ?>" required>
    </div>

    <div class="form_box">
        <label>confirm password</label>
        <input type="text" name="confirm_password" value="<?php echo $user->user_password; ?>" required>
    </div>

    <div class="form_box">
        <label>ip</label>
        <input value="<?php echo $user->user_ip; ?>" readonly disabled>
    </div>

    <div class="form_box">
        <label>updated at</label>
        <input value="<?php echo $user->user_updated_at; ?>" readonly required>
    </div>

    <div class="form_box">
        <label>created at</label>
        <input value="<?php echo $user->user_created_at; ?>" readonly required>
        <input type="hidden" name="user_id" value="<?php echo $user->user_id; ?>" readonly required>
    </div>

    <div class="form_box">
        <button>update user</button>
    </div>

</form>

