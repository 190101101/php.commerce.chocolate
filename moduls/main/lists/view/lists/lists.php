<style>
    .page_head:before{
        background-image: url('resources/files/system/content/chocolate.jpg');
    }
</style>

<div class="page_head">
    <div class="page_head_title_box">
        <span>список продуктов</span>
        <span>имя, цена, порция продуктов</span>
    </div>
</div>

<div class="page_content">
    <div class="inner_content bower lists">
        <table class="table-media" id="page">
            <thead>
                <tr>
                    <th>имя</th>
                    <th>цена</th>
                    <th>порция</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->product as $product): ?>
                 <tr>
                    <td aria-label="имя"><?php echo $product->product_name; ?></td>
                    <td aria-label="цена"><?php echo $product->product_price; ?> $</td>
                    <td aria-label="порция"><?php echo $product->product_portion; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
