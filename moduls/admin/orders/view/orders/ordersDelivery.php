<?php $orders = $data->orders; ?>
<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>заказ</span>
            </a>
        </li>
    </ul>
</div>

<div class="table-content orders_read">
    <table id="tableview" class="table-media">
        <thead>
            <tr>
                <th>name</th>
                <th>status</th>
                <th>price</th>
                <th>piece</th>
                <th>portion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data->cart as $cart):  ?>
             <tr>
                <td aria-label='name'><?php echo $cart->cart_product_name; ?></td>
                 <td aria-label='status'>
                    <label class="switch">
                        <input 
                            <?php if($orders->orders_confirm == 1): echo 'disabled'; endif; ?>
                            type="checkbox" class="read_cart_status" 
                            data-id="/panel/cart/status/<?php echo $cart->cart_id; ?>"
                            <?php echo $cart->cart_status == 1 ? 'checked' : ''; ?> >
                        <span class="slider round"></span>
                    </label>
                </td>

                <td aria-label='price'><?php echo $cart->cart_product_price; ?></td>
                <td aria-label='piece'><?php echo $cart->cart_product_piece; ?></td>
                <td aria-label='portion'><?php echo $cart->cart_product_portion; ?></td>
             </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <table id="tableview" class="table-media my-3 horizontal">
        <thead>
            <tr>
                <th>order id</th>
                <th>user id</th>
                <th>user login</th>
                <th>user email</th>
                <th>user phone</th>
                <th>user address</th>
                <th>created at</th>
                <th>total price</th>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td aria-label='order id'># <?php echo $orders->orders_id; ?> </td>
                <td aria-label='user id'># <?php echo $orders->user_id; ?> </td>
                <td aria-label='user login'> <?php echo $orders->user_login; ?> </td>
                <td aria-label='user email'> <?php echo $orders->user_email; ?> </td>
                <td aria-label='user phone'> <?php echo $orders->user_phone; ?> </td>
                <td aria-label='user address'> <?php echo $orders->user_address; ?> </td>
                <td aria-label='created at'><?php echo $orders->orders_created_at; ?></td>
                <td aria-label='подтверждения от админа'>
                    <label class="switch">
                        <input 
                            type="checkbox" 
                            class="confirm" 
                            data-id="/panel/orders/confirm/<?php echo $orders->orders_id; ?>"
                            <?php echo $orders->orders_confirm == 1 ? 'checked disabled' : ''; ?> >
                        <span class="slider round"></span>
                    </label>
                </td>

                <?php if($orders->orders_refusal == 1): ?>
                <td aria-label='статус заказа от пользователя'>
                    <label class="switch">
                        <input 
                            disabled
                            type="checkbox"
                            <?php echo $orders->user_confirm == 1 ? 'checked' : ''; ?> >
                        <span class="slider round"></span>
                    </label>
                </td>
                <?php endif; ?>

                <td aria-label='total price' class="orders_total_price">
                    <?php echo $orders->orders_price; ?> $
                </td>
             </tr>

            <tr>
                <td>
                    <div class="table_under">
                        <div class="table_box">
                            <a 
                                data-buy="<?php echo $orders->orders_id; ?>"
                                data-id="/panel/orders/buy/<?php echo $orders->orders_id; ?>" class="buy" 
                                style="<?php if($orders->orders_confirm == 0): echo 'display: none;'; endif; ?>">
                                заказ доставлен в адрес
                            </a> 
                        </div>

                        <?php if($orders->orders_confirm == 0): ?>
                        <div class="table_box">
                            <a 
                                data-del="<?php echo $orders->orders_id; ?>"
                                data-id="/panel/orders/refuse/<?php echo $orders->orders_id; ?>" class="refuse">отказать и удалить</a>
                        </div>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    $('.confirm').on('change', function(){
        argument = this;
        alertify.confirm("вы действительно хотите подтвердить заказ?", function(){ 
            _ajax(argument).done(function(data){
                var json = $.parseJSON(data);
                if(json.code == 200) {
                    $('.read_cart_status').prop("disabled", true);
                    $('.confirm').prop("disabled", true);
                    $('.refuse').hide();
                    $('.buy').show();
                }
                if(json.code == 300) {
                    $(argument).prop('checked', false);
                }
            });
        }, function(){
            $(argument).prop('checked', false);
        });
    });

    $('body').on('click', '.buy', function() {
        argument = this;
        alertify.confirm("продукты доставлено и заказ помещается в магазин", function(){ 
            _ajax(argument).done(function(data){
                var json = $.parseJSON(data);
                if(json.code == 200) {
                    id = $(argument).attr('data-buy');
                    $('.table-media tr').find("a[data-del='"+id+"']").parents('.table-media tr').hide();
                    $(argument).parents('.table-content').hide();
                }
            });
        });
    });
    
    $('.refuse').on('click', function(){
        argument = this;
        
        alertify.confirm("вы уверены что хотите удалить???", function(){ 
            _ajax(argument).done(function(data){
                var json = $.parseJSON(data);
                if(json.code == 200) {
                    id = $(argument).attr('data-del');
                    $('.table-media tr').find("a[data-del='"+id+"']").parents('.table-media tr').hide();
                    $(argument).parents('.table-content').hide();
                }
            });
        });
    });

    $('.orders_read').on('change', '.read_cart_status', function() {
        __ajaxWithattr(this).done(function(data){
            var json = $.parseJSON(data);
            _message(json);
            if(json.code == 200) {
                render_orders_total(json.data);
            }
        });
    });

</script>