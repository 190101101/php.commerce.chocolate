<?php 
    if(isset($_COOKIE['user']))
    {
        $user_cookie = json_decode($_COOKIE['user']);
    }
?>

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

<!-- <form action="/signin" method="POST" class="general_form"> -->
<form class="general_form signin_form">
    <div class="form_box">
        <label>user login</label>
        <input 
            type="text" 
            name="user_login" 
            <?php if(isset($user_cookie->user_login)): ?>
                value="<?php echo $user_cookie->user_login; ?>" 
            <?php else: ?>
                placeholder="user login" 
            <?php endif; ?>
            required
        >
    </div>
    <div class="form_box">
        <label>user password</label>
        <input 
            type="text" 
            name="user_password" 
            <?php if(isset($user_cookie->user_password)): ?>
                value="<?php echo $user_cookie->user_password; ?>" 
            <?php else: ?>
                placeholder="user password" 
            <?php endif; ?>
            required
        >
    </div>
    <div class="form_box">
        <button>sign in</button>
    </div>
    <div class="form_box">
        <a class="a_signup_btn">don't have an account?</a>
    </div>
</form>


<script>
    $('body').on('click', '.a_signup_btn', function() {
        history_update('/signup');
    });
</script>

