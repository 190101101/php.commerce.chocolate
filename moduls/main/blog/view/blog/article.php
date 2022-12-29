<?php $blog = $data->blog; ?>

<div class="article_head">
    <div class="article_head_box">
        <div class="article_head_inner">
            <img src="/resources/files/upload/blog/<?php echo $blog->blog_image; ?>">
            <div>
                <span><?php echo $blog->blog_title; ?></span>
                <span><?php echo $blog->blog_subtitle; ?></span>
            </div>
        </div>
    </div>
</div>


<div class="article_content"><?php echo $blog->blog_content; ?></div>

