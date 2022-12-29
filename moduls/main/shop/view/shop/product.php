<?php $product = $data->product; ?>
<div class="row">
    <div class="col-md-12">
        <div class="product_image_box">
            <img src="/resources/files/upload/product/<?php echo $product->product_image; ?>" class="show_modal big" type="button" data-toggle="modal" data-target="#modal">
        </div>
        <div class="product_info_box">
            <div>
                <span><?php echo $product->product_price; ?> $</span>
                <span>
                    <?php echo $product->product_buy; ?>
                    <img src="/resources/files/system/svg/sell.png">
                </span>
                <span>
                    <?php echo $product->product_view; ?>
                    <img src="/resources/files/system/svg/eye.svg">
                </span>
            </div>
            <div>
                <span><?php echo $product->product_name; ?></span>
                <span><?php echo $product->product_subtitle; ?></span>
            </div>
        </div>
        <div class="row image_under_product no-gutters">
            <?php foreach($data->image as $image): ?>
            <div class="col-lg-3 col-md-4 col-sm-3 col-3">
                <img src="/resources/files/upload/image/<?php echo $image->image_image; ?>" class="show_modal big" type="button" data-toggle="modal" data-target="#modal">
            </div>
        <?php endforeach; ?>
        </div>
    </div>


    <div class="col-md-12">
        <ul class="nav mb-3" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="pill" href="#product_description" role="tab" aria-controls="product_description" aria-selected="true">содержание</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="pill" href="#product_information" role="tab" aria-controls="product_information" aria-selected="false">
            о продукте</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane show active" id="product_description" role="tabpanel">
              <?php echo $product->product_content; ?>
          </div>

          <div class="tab-pane" id="product_information" role="tabpanel">
              <?php echo $product->product_about; ?>
          </div>
        </div>  
    </div>
</div>   
