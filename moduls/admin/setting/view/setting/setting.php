<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">setting</li>
        </ol>
        <div class="admin-page-title">
            <span>setting</span>
        </div>
    </div>
    <div class="table-content">
        <table id="tableview" class="table-media my-3">
            <thead>
                <tr>
                    <th>
                        <img src="/resources/files/system/svg/update.svg">
                    </th>
                    <th>#</th>
                    <th>desc</th>
                    <th>key</th>
                    <th>value</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->setting as $setting):  ?>
                 <tr>
                    <td aria-label='update'>
                        <a data-id="<?php echo $setting->setting_id; ?>" class="setting_up">
                            <img src="/resources/files/system/svg/update.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $setting->setting_id; ?></td>
                    <td aria-label='desc'><?php echo $setting->setting_description; ?></td>
                    <td aria-label='key'><?php echo $setting->setting_key; ?></td>
                    <td aria-label='value'><?php echo substr($setting->setting_value, 0, 50); ?></td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script type='text/javascript'>
    $('body').on('click', '.admin-btn', function() {
        if($('.history').hasClass('history-active')){
            history();
        }
    });

    $('body').on('click', '.setting_up', function() {
        url = '/panel/setting/update/'+$(this).attr('data-id');
        history_update(url);
    });
</script>
