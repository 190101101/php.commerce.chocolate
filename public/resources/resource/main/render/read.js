function render_search_read(json)
{
    $('#history_html').html('');
    json.forEach((element) => {
        const search = `
            <div class="row">
            <div class="col-12 shop_card">
                <div class="card">
                    <div class="card-head">
                        <img src="/resources/files/upload/product/${element.product_image}" class="head">
                        <div class="card_head_show">
                            <a data-id="/cart/add/${element.product_id}" class="head_btn cart_add">
                                <img src="/resources/files/system/svg/cart.svg">
                            </a>
                            <a  data-id="/shop/product/${element.product_slug}" class="head_btn product_btn">
                                <img src="/resources/files/system/svg/search.svg">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card_body_upper">
                            <span>${element.product_name}</span>
                        </div>
                        <div class="card_body_under">
                            <span>категория</span>
                            <span>/</span>
                            <a href="/shop/category/${element.category_slug}">
                                ${element.category}
                            </a>
                        </div>
                        <div class="card_body_price">
                            <span>
                                ${element.product_price} $                                
                            </span>
                            <span>
                                <img src="/resources/files/system/svg/sell.png">
                                ${element.product_buy}
                            </span>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        `;
        $('#history_html').prepend(search);
    });

}


function render_productLoadmore(json)
{
    json.forEach((element) => {
        const product = `
        <div class="col-lg-3 col-md-4 col-sm-6 shop_card">
            <div class="card">
                <div class="card-head">
                    <img src="/resources/files/upload/product/${element.product_image}" class="head">
                    <div class="card_head_show">
                        <a data-id="/cart/add/${element.product_id}" class="head_btn cart_add">
                            <img src="/resources/files/system/svg/cart.svg">
                        </a>
                        <a  data-id="/shop/product/${element.product_id}" class="head_btn product_btn">
                            <img src="/resources/files/system/svg/search.svg">
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card_body_upper">
                        <span>${element.product_name}</span>
                    </div>
                    <div class="card_body_under">
                        <span>категория</span>
                        <span>/</span>
                        <a href="/shop/category/${element.category_slug}">
                            ${element.category}
                        </a>
                    </div>
                    <div class="card_body_price">
                        <span>
                            ${element.product_price}
                            $                                
                        </span>
                        <span>
                            <img src="/resources/files/system/svg/sell.png">
                            ${element.product_buy}
                            101
                        </span>
                    </div>
                </div>
            </div>
        </div>`;
        $('.shop_content .row').append(product);
    });
}


function render_galleryLoadmore(json)
{
    json.forEach((element) => {
        const gallery = `
        <div class="card">
            <img src="/resources/files/upload/gallery/${element.gallery_image}" 
            class="card-img-top show_modal" 
            type="button"data-toggle="modal"data-target="#modal">
        </div>
      `;
        $('.gallery_content').append(gallery);
    });
}

function render_videoLoadmore(json)
{
    json.forEach((element) => {
        const gallery = `
        <div class="card">
            <img data-id="/video/videoLook/${element.video_id}" class="video_btn card-img-top"
                src="/resources/files/upload/video/${element.video_image}" 
                type="button" data-toggle="modal" data-target="#bigModal">
        </div>
      `;
        $('.gallery_content').append(gallery);
    });
}