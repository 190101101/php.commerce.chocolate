function render_cart_create(json)
{
    $('.table_cart').prepend(` 
        <tr>
            <td aria-label="image">
                <img src="/resources/files/upload/product/${json.cart_product_image}">
            </td>
            <td aria-label="name">${json.cart_product_name}</td>
            <td aria-label="portion">${json.cart_product_portion}</td>
            <td aria-label="piece"> 
                <a data-id="/cart/update/${json.cart_id}" class="piece_up"
                type="button" data-toggle="modal" data-target="#mainSmallModal">
                    <span data-piece="${json.cart_id}"> 
                        ${json.cart_product_piece}
                    </span>
                    <img src="/resources/files/system/svg/update.svg">
                </a>
            </td>
            <td aria-label="price">
                 ${json.cart_product_price} $
            </td>
            <td aria-label="delete">
                <a data-id="/cart/delete/${json.cart_id}" class="cart_del">
                    <img src="resources/files/system/svg/delete.svg">
                </a>
            </td>
        </tr>
    `);

    $('.table_order').append(`
        <tr>
            <td aria-label='name'>${json.cart_product_name}</td>
            <td aria-label='price'>${json.cart_product_price}</td>
            <td aria-label='piece'>${json.cart_product_piece}</td>
             <td aria-label='status'>
                <label class="switch">
                    <input type="checkbox" disabled> 
                    <span class="slider round"></span>
                </label>
            </td>
            <td aria-label='portion'>${json.cart_product_portion}</td>
        </tr>
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
}
