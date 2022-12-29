function render_cart_drop()
{
    $('.table-media').html(`
        <tbody>
            <tr class="cart_total">
                <td aria-label="total">total</td>
                <td aria-label="price">0 $</td>
            </tr>
        </tbody>
    `);
}

function render_cart_delete(json)
{
    if(json.orders_price > 0)
    {
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
    else
    {
        $('.table_cart .cart_total').html(`
            <td aria-label="total">total</td>
            <td aria-label="price">0 $</td>
        `);   
    }

    $('.table_box a').prop('disabled', false);
}
