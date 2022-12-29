function render_cart_piece(json, option)
{
    $('.table_cart tr a').find('span[data-piece="'+option.cart_id+'"]').parents('.table_cart tr a').html(`
        <span data-piece="${option.cart_id}"> 
            ${option.cart_product_piece}
        </span>
        <img src="/resources/files/system/svg/update.svg">
    `);

    $('.table_cart .cart_total').html(`
        <td aria-label="total">total</td>
        <td aria-label="price">${json.orders_price} $</td>
        <td>
            <div class="table_under cart_pay_box">
                <div class="table_box">
                    <a data-id="/cart/confirm" class="cart_confirm">Доставка</a>
                </div>
                <div class="table_box">
                    <a data-id="/cart/drop" class="cart_drop">очистить корзину</a> 
                </div>
            </div>
        </td>
    `);

    $('.cart_piece_update_form').html(`
        <div class="form_box">
            <label>product piece</label>
            <input type="text" name="cart_product_piece" value="${option.cart_product_piece}" required>
            <input type="hidden" name="cart_id" value="${option.cart_id}" required readonly>
        </div>
        <div class="form_box">
            <button>редактировать</button>
        </div>
    `);
}


function render_profile_info_update(json)
{
    $('.profile_info_form').html(`
        <div class="form_box">
            <label>user email</label>
            <input type="email" value="${json.user_email}" required readonly>
        </div>

        <div class="form_box">
            <label>user login</label>
            <input value="${json.user_login}" required readonly>
        </div>

        <div class="form_box">
            <label>user phone</label>
            <input type="text" name="user_phone" value="${json.user_phone}" required>
        </div>

        <div class="form_box">
            <label>user address</label>
            <input type="text" name="user_address" value="${json.user_address}" required>
        </div>

        <div class="form_box">
            <label>ip address</label>
            <input type="text" value="${json.user_ip}" required readonly>
        </div>

        <div class="form_box">
            <label>user updated at</label>
            <input type="text" value="${json.user_updated_at}" required readonly>
        </div>

        <div class="form_box">
            <label>user created at</label>
            <input type="text" value="${json.user_created_at}" required readonly>
        </div>

        <div class="form_box">
            <button>update</button>
        </div>
    `);
}

function render_profile_password_update(json)
{
    $('.profile_password_form').html(`
        <div class="form_box">
            <label>current password</label>
            <input type="text" value="${json.user_password}" required readonly>
        </div>

        <div class="form_box">
            <label>new password</label>
            <input type="text" name="new_password" placeholder="confirm password" required>
        </div>

        <div class="form_box">
            <label>confirm password</label>
            <input type="text" name="confirm_password" placeholder="confirm password" required>
        </div>

        <div class="form_box">
            <button>update</button>
        </div>

    `);
}