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
            <?php foreach($data->blog as $blog):  ?>
           <div class="col-md-6">
                <div class="blog_card">
                    <div class="blog_title">
                        <span>craft food</span>
                    </div>
                    <div class="blog_card_img_box">
                        <img data-id="/blog/article/<?php echo $blog->blog_slug; ?>" class="blog_btn"
                            src="/resources/files/upload/blog/<?php echo $blog->blog_image; ?>" >
                    </div>
                    <div class="blog_body">
                        <div>
                            <span><?php echo $blog->blog_created_at; ?></span>
                        </div>
                        <div class="blog_title_box">
                            <a data-id="/blog/article/<?php echo $blog->blog_slug; ?>" class="blog_btn">
                                <span><?php echo $blog->blog_title; ?></span>
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
    <?php \library\pagination::selector($data->page, 'blog/'); ?>
</div>


<script>
    $('body').on('click', '.blog_btn', function() {
        url = $(this).attr('data-id');
        history_update(url);
    });
</script>

