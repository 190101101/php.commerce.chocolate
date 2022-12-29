<?php $cart = $data->cart; ?>
<div class="general-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a href="#tab_info" data-toggle="tab">
                <img src="../resources/files/system/svg/basket.svg">
                <span>изменить</span>
            </a>
        </li>
    </ul>
</div>

<form class="cart_piece_update_form general_form">
<!-- <form action="/cart/update" method="POST" class="general_form"> -->
    <div class="form_box">
        <label>product piece</label>
        <input type="text" name="cart_product_piece" value="<?php echo $cart->cart_product_piece; ?>" required>
        <input type="hidden" name="cart_id" value="<?php echo $cart->cart_id; ?>" required readonly>
    </div>
    <div class="form_box">
        <button>редактировать</button>
    </div>
</form>

