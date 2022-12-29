<?php $buy = $data->buy; ?>
<div class="general-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/user.svg">
                <span>продукты</span>
            </a>
        </li>
    </ul>
</div>

<div class="table_wrapper_modal">
    <div class="table-content">
        <table class="table-media my-3">
            <thead>
                <tr>
                    <th>product id</th>
                    <th>product</th>
                    <th>total price</th>
                    <th>price</th>
                    <th>piece</th>
                    <th>portion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->shop as $shop): ?>
                 <tr>
                    <td aria-label='buy id'><?php echo $shop->product_id; ?></td>
                    <td aria-label='product'><?php echo $shop->shop_product_name; ?></td>
                    <td aria-label='total price'><?php echo $shop->shop_total_price; ?> $</td>
                    <td aria-label='price'><?php echo $shop->shop_product_price; ?> $</td>
                    <td aria-label='piece'><?php echo $shop->shop_product_piece; ?></td>
                    <td aria-label='portion'><?php echo $shop->shop_product_portion; ?></td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="table-content">
        <table class="table-media my-3 horizontal">
            <thead>
                <tr>
                    <th>buy id</th>
                    <th>user id</th>
                    <th>login</th>
                    <th>email</th>
                    <th>phone</th>
                    <th>address</th>
                    <th>card</th>
                    <th>ip</th>
                    <th>price</th>
                    <th>created</th>
                </tr>
            </thead>
            <tbody>
                 <tr>
                    <td aria-label='buy id'><?php echo $buy->buy_id; ?></td>
                    <td aria-label='user id'><?php echo $buy->user_id; ?></td>
                    <td aria-label='login'><?php echo $buy->user_login; ?></td>
                    <td aria-label='email'><?php echo $buy->user_email; ?></td>
                    <td aria-label='phone'><?php echo $buy->user_phone; ?></td>
                    <td aria-label='address'><?php echo $buy->user_address; ?></td>
                    <td aria-label='card'><?php echo $buy->buy_card; ?></td>
                    <td aria-label='ip'><?php echo $buy->user_ip; ?></td>
                    <td aria-label='price'><?php echo $buy->buy_price; ?> $</td>
                    <td aria-label='created'><?php echo $buy->buy_created_at; ?></td>
                 </tr>
            </tbody>
        </table>
    </div>
</div>



