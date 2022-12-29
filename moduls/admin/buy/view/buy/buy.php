<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">buy</li>
        </ol>
        <div class="admin-page-title">
            <span>buy</span>
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
                    <th>buy price</th>
                    <th>user id</th>
                    <th>user login</th>
                    <th>created at</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->buy as $buy):  ?>
                 <tr>
                    <td aria-label='update'>
                        <a data-id="<?php echo $buy->buy_id; ?>" class="buy_up">
                            <img src="/resources/files/system/svg/update.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $buy->buy_id; ?></td>
                    <td aria-label='buy price'><?php echo $buy->buy_price; ?> $</td>
                    <td aria-label='user id'><?php echo $buy->user_id; ?></td>
                    <td aria-label='user login'><?php echo $buy->user_login; ?></td>
                    <td aria-label='#'><?php echo $buy->buy_created_at; ?></td>
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
    
    $('body').on('click', '.buy_up', function() {
        url = '/panel/buy/read/'+$(this).attr('data-id');
        history_update(url);
    });
</script>


