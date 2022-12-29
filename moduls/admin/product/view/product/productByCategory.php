<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">product</li>
        </ol>
        <div class="admin-page-title">
            <span>product</span>
        </div>
    </div>
    <div class="table-content">
        <table id="tableview" class="table-media my-3">
            <thead>
                <tr>
                    <th>
                        <img src="/resources/files/system/svg/delete.svg">
                    </th>
                    <th>
                        <img src="/resources/files/system/svg/update.svg">
                    </th>
                    <th>
                        <img src="/resources/files/system/svg/file.svg">
                    </th>
                    <th>#</th>
                    <th>image</th>
                    <th>name</th>
                    <th>price</th>
                    <th>stock</th>
                    <th>status</th>
                    <th>created</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->productByCategory as $product):  ?>
                 <tr>
                    <td aria-label='delete'>
                        <a data-id="<?php echo $product->product_id; ?>" class="product_del">
                            <img src="/resources/files/system/svg/delete.svg">
                        </a>
                    </td>
                    <td aria-label='update'>
                        <a data-id="<?php echo $product->product_id; ?>" class="product_up">
                            <img src="/resources/files/system/svg/update.svg">
                        </a>
                    </td>
                    <td aria-label='image'>
                        <a data-id="<?php echo $product->product_id; ?>" class="image_read">
                            <img src="/resources/files/system/svg/file.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $product->product_id; ?></td>
                    <td aria-label='image'>
                        <?php if(!empty($product->product_image)): ?>
                            <img src="/resources/files/upload/product/<?php echo $product->product_image; ?>">
                        <?php else: ?>
                            <img src="/resources/files/system/svg/image.png">
                        <?php endif; ?>
                    </td>
                    <td aria-label='name'><?php echo $product->product_name; ?></td>
                    <td aria-label='price'><?php echo $product->product_price; ?></td>
                    <td aria-label='stock'><?php echo $product->product_stock; ?></td>
                    <td aria-label='status'>
                        <label class="switch">
                        <input 
                            type="checkbox" 
                            class="product_status" 
                            id="<?php echo $product->product_id; ?>"
                            <?php echo $product->product_status == 1 ? 'checked' : ''; ?> >
                        <span class="slider round"></span>
                        </label>
                    </td>
                    <td aria-label='created'><?php echo $product->product_created_at; ?></td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script type='text/javascript'>
    $('body').on('click', '.admin-btn', function() {
        history_load('/panel/product/create');
    });

    $('body').on('click', '.product_up', function() {
        url = '/panel/product/update/'+$(this).attr('data-id');
        history_update(url);
    });

    $('body').on('click', '.image_read', function() {
        url = '/panel/image/product/all/'+$(this).attr('data-id');
        history_update(url);
    });
</script>

