<div class="general-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <?php if($data->confirmOrders == FALSE): ?>
        <li>
            <a href="#cart_product" data-toggle="tab">
                <img src="../resources/files/system/svg/basket.svg">
                <span>корзина</span>
            </a>
        </li>
        <?php else: ?>
        <li>
            <a href="#cart_order" data-toggle="tab">
                <img src="../resources/files/system/svg/user.svg">
                <span>заказ</span>
            </a>
        </li>
    <?php endif; ?>
    </ul>
</div>

<div class="tab-content tab_border">
    <?php if($data->confirmOrders == FALSE): ?>
    <div class="tab-pane active" id="cart_product">
        <table class="table-media table_cart horizontal">
            <tbody>
                <?php $total_price = 0; ?>
                <?php if($data->cart != false): ?>
                <?php foreach ($data->cart as $cart): ?>
                <tr>
                    <td aria-label="image">
                        <img src="/resources/files/upload/product/<?php echo $cart->cart_product_image; ?>">
                    </td>
                    <td aria-label="name"><?php echo $cart->cart_product_name; ?></td>
                    <td aria-label="portion"><?php echo $cart->cart_product_portion; ?></td>
                    <td aria-label="piece"> 
                         <a data-id="/cart/update/<?php echo $cart->cart_id; ?>" class="piece_up" 
                        type="button" data-toggle="modal" data-target="#mainSmallModal">
                            <span data-piece="<?php echo $cart->cart_id;?>"> 
                                <?php echo $cart->cart_product_piece; ?> 
                            </span>
                            <img src="/resources/files/system/svg/update.svg">
                        </a>
                    </td>
                    <td aria-label="price" data-id="<?php echo $cart->cart_id; ?>">
                         <?php $total_price += $cart->cart_product_price * $cart->cart_product_piece; ?>
                         <?php echo $cart->cart_product_price; ?> $
                    </td>
                    <td aria-label="delete">
                        <a data-id="/cart/delete/<?php echo $cart->cart_id; ?>" class="cart_del">
                            <img src="resources/files/system/svg/delete.svg">
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <tr class="cart_total">
                    <td aria-label="total">total</td>
                    <td aria-label="price"><?php echo $total_price; ?> $</td>
                    <td>
                        <div class="table_under cart_pay_box">
                            <?php if(count($data->cart) > 0): ?>
                            <div class="table_box">
                                <a data-id="/cart/confirm" class="cart_confirm">Доставка</a>
                            </div>
                            <div class="table_box">
                                <a data-id="/cart/drop" class="cart_drop">очистить корзину</a> 
                            </div>
                            <?php endif; ?>
                        </div>
                    </td>
                </tr>
                <?php else: ?>
                 <tr class="cart_total">
                    <td aria-label="total">total</td>
                    <td aria-label="price">0 $</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php else: ?>
    <div class="tab-pane active" id="cart_order">
        <table class="table-media table_order">
            <thead>
                <tr>
                    <td>name</td>
                    <td>price</td>
                    <td>piece</td>
                    <td>status</td>
                    <td>portion</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->confirmCart as $confirmCart):  ?>
                 <tr>
                    <td aria-label='name'><?php echo $confirmCart->cart_product_name; ?></td>
                    <td aria-label='price'><?php echo $confirmCart->cart_product_price; ?> $</td>
                    <td aria-label='piece'>
                        <?php echo $confirmCart->cart_product_piece; ?>
                    </td>
                     <td aria-label='status' >
                        <label class="switch">
                        <input 
                            type="checkbox" 
                            <?php echo $confirmCart->cart_status == 1 ? 'checked' : ''; ?> disabled>
                        <span class="slider round"></span>
                        </label>
                    </td>
                    <td aria-label='portion'><?php echo $confirmCart->cart_product_portion; ?></td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php $confirmOrders = $data->confirmOrders; ?>
        <table id="tableview" class="table-media my-3 horizontal">
            <tbody>
                 <tr>
                    <td aria-label='order id'># <?php echo $confirmOrders->orders_id; ?> </td>
                    <td aria-label='user login'><?php echo $confirmOrders->user_login; ?> </td>
                    <td aria-label='user email'><?php echo $confirmOrders->user_email; ?> </td>
                    <td aria-label='user phone'><?php echo $confirmOrders->user_phone; ?> </td>
                    <td aria-label='user address'> <?php echo $confirmOrders->user_address; ?> </td>
                    <td aria-label='order created at'><?php echo $confirmOrders->orders_created_at; ?></td>
                    <td aria-label='положения заказа'>
                        <label class="switch">
                        <input 
                            disabled
                            type="checkbox" 
                            id="<?php echo $blog->blog_id; ?>"
                            <?php echo $confirmOrders->orders_confirm == 1 ? 'checked' : ''; ?> >
                        <span class="slider round"></span>
                        </label>
                    </td>
                    <td aria-label='total price'><?php echo $confirmOrders->orders_price; ?> $</td>
                 </tr>
                 <?php if($confirmOrders->orders_refusal == 1): ?>
                <tr class="cart_total user_confirm">
                     <td aria-label='подтверждение пользователя'>
                        <label class="switch">
                        <input 
                            type="checkbox" 
                            data-id="/cart/user/confirm"
                            class="cart_user_confirm"
                            <?php echo $confirmOrders->user_confirm == 1 ? 'checked' : ''; ?> >
                        <span class="slider round"></span>
                        </label>
                    </td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>
</div>

