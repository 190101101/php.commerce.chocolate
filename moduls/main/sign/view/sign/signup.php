<div class="general-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/user.svg">
                <span>sign in</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/signup" method="POST" class="general_form"> -->
<form class="general_form signup_form">
    <div class="form_box">
        <label>user email</label>
        <input type="email" name="user_email" placeholder="user email" required>
    </div>
    <div class="form_box">
        <label>user login</label>
        <input type="text" name="user_login" placeholder="user login" required>
    </div>

    <div class="form_box">
        <label>user phone</label>
        <input type="text" name="user_phone" placeholder="user phone" required>
    </div>

    <div class="form_box">
        <label>user address</label>
        <input type="text" name="user_address" placeholder="user address" required>
    </div>

    <div class="form_box">
        <label>user password</label>
        <input type="text" name="user_password" placeholder="user password" required>
    </div>
    <div class="form_box">
        <label>confirm password</label>
        <input type="text" name="confirm_password" placeholder="confirm password" required>
    </div>
    <div class="form_box">
        <button>sign up</button>
    </div>
    <div class="form_box">
        <a class="a_signin_btn">already have account?</a>
    </div>
</form>

<script>
    $('body').on('click', '.a_signin_btn', function() {
        history_update('/signin');
    });
</script>
