
<style>
    .page_head:before{
        background-image: url('/resources/files/system/content/chocolate.jpg');
    }
</style>

<div class="page_head">
    <div class="page_head_title_box">
        <span>Blog Three Columns</span>
        <span>blog subtitle</span>
    </div>
</div>

<div class="page_content">
    <div class="inner_content">
        <div class="row">
            <?php foreach($data->category as $category): ?>
            <div class="col-md-6">
                <div class="blog_card">
                    <div class="blog_title">
                        <span>craft food</span>
                    </div>
                    <div class="blog_card_img_box">
                        <img src="/resources/files/upload/category/<?php echo $category->category_image; ?>">
                    </div>
                    <div class="blog_body">
                        <div>
                            <span><?php echo $category->category_created_at; ?></span>                               
                            <span><?php echo db()->wherecount('product', 'category_id=?', [$category->category_id])->count; ?> продуктов</span>
                        </div>
                        <div class="blog_title_box">
                            <a href="/shop/category/<?php echo seo($category->category_slug); ?>">
                                <span><?php echo $category->category_title; ?></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="paginate">
    <?php \library\pagination::selector($data->page, 'category/'); ?>
</div>
