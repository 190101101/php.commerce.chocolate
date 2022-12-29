 <style>
    .page_head:before{
        background-image: url('/resources/files/system/content/chocolate.jpg');
    }
</style>

<div class="page_head">
    <div class="page_head_title_box">
        <span>поиск</span>
        <span>найдено <?php echo count($data->product); ?> продукта</span>
    </div>
</div>

<div class="page_content">
    <div class="inner_content">
        <div class="row">
            <?php foreach($data->product as $product): ?>
            <div class="col-lg-3 col-md-4 col-sm-6 shop_card">
                <div class="card">
                    <div class="card-head">
                        <img src="/resources/files/upload/product/<?php echo $product->product_image; ?>" class="head">
                        <div class="card_head_show">
                            <a data-id="/cart/add/<?php echo $product->product_id; ?>" class="head_btn cart_add">
                                <img src="/resources/files/system/svg/cart.svg">
                            </a>
                            <a  data-id="/shop/product/<?php echo $product->product_id; ?>" class="head_btn product_btn">
                                <img src="/resources/files/system/svg/search.svg">
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="card_body_upper">
                            <span><?php echo $product->product_name; ?></span>
                        </div>
                        <div class="card_body_under">
                            <span>категория</span>
                            <span>/</span>
                            <a href="/shop/category/<?php echo seo($product->category_slug); ?>">
                                <?php echo $product->category; ?>
                            </a>
                        </div>
                        <div class="card_body_price">
                            <span>
                                <?php echo $product->product_price; ?>
                                $                                
                            </span>
                            <span>
                                <img src="/resources/files/system/svg/sell.png">
                                <?php echo $product->product_buy; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script>
    $('body').on('click', '.product_btn', function() {
        url = $(this).attr('data-id');
        history_update(url);
    });
</script>