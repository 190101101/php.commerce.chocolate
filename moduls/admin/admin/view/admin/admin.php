<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/admin">home</a></li>
            <li class="breadcrumb-active">admin</li>
        </ol>
    </div>
    <div class="table-content">
        <div class="panel_box">
            <div class="row">
                <div class="col-md-3">
                    <div class="card admin_card-shop">
                        <div class="card_head">
                            <div>
                                <img src="/resources/files/system/svg/usd.svg">
                            </div>
                            <div>
                                <span><?php echo $data->buyCashSum->sum ?? 0; ?> $</span>
                                <span>продано <?php echo $data->buyProductCount->count ?? 0; ?> продукта</span>
                                <span>сумма всех покупок</span>
                            </div>
                        </div>
                        <a class="card_body">
                            <div>
                                <span>магазин</span>
                            </div>
                        </a>
                    </div>
                </div>
            
                <div class="col-md-3">
                    <div class="card admin_card-order">
                        <div class="card_head">
                            <div>
                                <img src="/resources/files/system/svg/cart.svg">
                            </div>
                            <div>
                                <span><?php echo $data->ordersDeliveryCount->count ?? 0; ?></span>
                                <span>заказы на доставку</span>
                                <span>сумма активных заказов <?php echo $data->ordersDeliverySum->sum ?? 0; ?> $</span>
                            </div>
                        </div>
                        <a href="/panel/orders" class="card_body">
                            <div>все заказы</div>
                            <div>
                                <img src="/resources/files/system/svg/settings.svg">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card admin_card-count">
                        <div class="card_head">
                            <div>
                                <img src="/resources/files/system/svg/cart.svg">
                            </div>
                            <div>
                                <span><?php echo $data->productCount->count ?? 0; ?></span>
                                <span>продукты</span>
                                <span>количество продуктов</span>
                            </div>
                        </div>
                        <a href="/panel/product" class="card_body">
                            <div>все продукты</div>
                            <div>
                                <img src="/resources/files/system/svg/settings.svg">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card admin_card-piece">
                        <div class="card_head">
                            <div>
                                <img src="/resources/files/system/svg/cart.svg">
                            </div>
                            <div>
                                <span><?php echo $data->productFinished->count ?? 0; ?></span>
                                <span>продукты</span>
                                <span>количество продуктов</span>
                            </div>
                        </div>
                        <a class="card_body">
                            <div>конченные продукт</div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
