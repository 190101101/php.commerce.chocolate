<?php $setting = $data->setting; ?>
<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>setting update</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/admin/setting/update/<?php echo $setting->setting_id; ?>" method="POST" class="general_form"> -->
<form class="general_form setting_update">

    <div class="form_box">
        <label>setting description</label>
        <input type="text" name="setting_description" value="<?php echo $setting->setting_description; ?>" required>
    </div>

    <div class="form_box">
        <label>setting key</label>
        <input type="text" name="setting_key" value="<?php echo $setting->setting_key; ?>" required>
    </div>

    <div class="form_box">
        <textarea name="setting_value" class="middle" required><?php echo $setting->setting_value; ?></textarea>
        <input type="hidden" name="setting_id" value="<?php echo $setting->setting_id; ?>" readonly required>
        <input type="hidden" name="setting_updated_at" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly required>
    </div>

    <div class="form_box">
        <button>setting update</button>
    </div>

</form>



