<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">user</li>
        </ol>
        <div class="admin-page-title">
            <span>user</span>
        </div>
    </div>
    <div class="table-content">
        <table id="tableview" class="table-media my-3">
            <thead>
                <tr>
                    <th>
                        <img src="/resources/files/system/svg/delete.svg">
                    </th>
                    <th>
                        <img src="/resources/files/system/svg/update.svg">
                    </th>
                    <th>#</th>
                    <th>login</th>
                    <th>email</th>
                    <th>ip</th>
                    <th>status</th>
                    <th>type</th>
                    <th>updated</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->user as $user):  ?>
                 <tr>
                    <td aria-label='delete'>
                        <a data-id="<?php echo $user->user_id; ?>" class="user_del">
                            <img src="/resources/files/system/svg/delete.svg">
                        </a>
                    </td>
                    <td aria-label='update'>
                        <a data-id="<?php echo $user->user_id; ?>" class="user_up">
                            <img src="/resources/files/system/svg/update.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $user->user_id; ?></td>
                    <td aria-label='login'><?php echo $user->user_login; ?></td>
                    <td aria-label='email'><?php echo $user->user_email; ?></td>
                    <td aria-label='ip'><?php echo $user->user_ip; ?></td>
                    <td aria-label='status'>
                        <label class="switch">
                        <input type="checkbox" class="user_status" id="<?php echo $user->user_id; ?>"
                            <?php echo $user->user_status == 1 ? 'checked' : ''; ?> >
                        <span class="slider round"></span>
                        </label>
                    </td>
                    <td aria-label='type'><?php echo $user->user_type; ?></td>
                    <td aria-label='updated'><?php echo $user->user_updated_at; ?></td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<script type='text/javascript'>
    $('body').on('click', '.admin-btn', function() {
        history_load('/panel/user/create');
    });

    $('body').on('click', '.user_up', function() {
        url = '/panel/user/update/'+$(this).attr('data-id');
        history_update(url);
    });
</script>

