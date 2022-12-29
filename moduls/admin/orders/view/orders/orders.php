<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">orders</li>
        </ol>
        <div class="admin-page-title">
            <span>orders</span>
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
                    <th>price</th>
                    <th>type</th>
                    <th>user id</th>
                    <th>user login</th>
                    <th>created at</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->orders as $orders):  ?>
                 <tr>
                    <td aria-label='update'>
                        <a 
                            data-del="<?php echo $orders->orders_id; ?>"
                            data-id="/panel/orders/delivery/<?php echo $orders->user_id; ?>" class="orders_up">
                            <img src="/resources/files/system/svg/update.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $orders->orders_id; ?></td>
                    <td aria-label='price'><?php echo $orders->orders_price; ?> $</td>
                    <td aria-label='type'><?php echo $orders->orders_type; ?></td>
                    <td aria-label='user id'><?php echo $orders->user_id; ?></td>
                    <td aria-label='user login'><?php echo $orders->user_login; ?></td>
                    <td aria-label='created at'><?php echo $orders->orders_created_at; ?></td>
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

    $('body').on('click', '.orders_up', function() {
        url = $(this).attr('data-id');
        history_update(url);
    });
</script>


