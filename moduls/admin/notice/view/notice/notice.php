<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">notice</li>
        </ol>
        <div class="admin-page-title">
            <span>notice</span>
        </div>
    </div>
    <div class="table-content">
        <table id="tableview" class="table-media my-3">
            <thead>
                <tr>
                    <th>
                        <img src="/resources/files/system/svg/delete.svg">
                    </th>
                    <th>#</th>
                    <th>title</th>
                    <th>message</th>
                    <th>status</th>
                    <th>created</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->notice as $notice):  ?>
                 <tr>
                    <td aria-label='delete'>
                        <a data-id="<?php echo $notice->notice_id; ?>" class="notice_del">
                            <img src="/resources/files/system/svg/delete.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $notice->notice_id; ?></td>
                    <td aria-label='title'><?php echo $notice->notice_message; ?></td>
                    <td aria-label='message'><?php echo $notice->notice_body; ?></td>
                    <td aria-label='status'>
                        <label class="switch">
                        <input disabled type="checkbox" class="notice_status"
                            <?php echo $notice->notice_status == 1 ? 'checked' : ''; ?> >
                        <span class="slider round"></span>
                        </label>
                    </td>
                    <td aria-label='created'><?php echo $notice->notice_created_at; ?></td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<script type='text/javascript'>
    $('body').on('click', '.admin-btn', function() {
        history_load('/panel/notice/create');
    });

    $('body').on('click', '.notice_up', function() {
        url = '/panel/notice/update/'+$(this).attr('data-id');
        history_update(url);
    });
</script>

