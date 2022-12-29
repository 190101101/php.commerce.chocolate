<?php $buy = $data->buy; ?>
<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/update.svg">
                <span>shop</span>
            </a>
        </li>
    </ul>
</div>

<div class="table-content">
    <table id="tableview" class="table-media">
        <thead>
            <tr>
                <th>name</th>
                <th>price</th>
                <th>piece</th>
                <th>portion</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data->shop as $shop):  ?>
             <tr>
                <td aria-label='name'><?php echo $shop->shop_product_name; ?></td>
                <td aria-label='price'><?php echo $shop->shop_product_price; ?></td>
                <td aria-label='piece'><?php echo $shop->shop_product_piece; ?></td>
                <td aria-label='portion'><?php echo $shop->shop_product_portion; ?></td>
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
                <th>bank card</th>
                <th>created at</th>
                <th>total price</th>
            </tr>
        </thead>
        <tbody>
             <tr>
                <td aria-label='order id'># <?php echo $buy->buy_id; ?> </td>
                <td aria-label='user id'> <?php echo $buy->user_id; ?> </td>
                <td aria-label='user login'> <?php echo $buy->user_login; ?> </td>
                <td aria-label='user email'> <?php echo $buy->user_email; ?> </td>
                <td aria-label='user phone'> <?php echo $buy->user_phone; ?> </td>
                <td aria-label='user address'> <?php echo $buy->user_address; ?> </td>
                <td aria-label='bank card'> <?php echo $buy->buy_card; ?> </td>
                <td aria-label='created at'><?php echo $buy->buy_created_at; ?></td>
                <td aria-label='total price'><?php echo $buy->buy_price; ?> $</td>
             </tr>
        </tbody>
    </table>
</div>

