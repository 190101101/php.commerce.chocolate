<style>
    .page_head:before{
        background-image: url('/resources/files/system/content/chocolate.jpg');
    }
</style>

<div class="page_head">
    <div class="page_head_title_box">
        <span>gallery</span>
        <span>gallery subtitle</span>
    </div>
</div>                            

<div class="page_content">
    <div class="inner_content">
        <div class="card-columns gallery_content" 
            data-start="<?php echo count($data->gallery); ?>">
            <?php foreach($data->gallery as $gallery): ?>
            <div class="card">
                <img src="/resources/files/upload/gallery/<?php echo $gallery->gallery_image; ?>" class="card-img-top show_modal" data-toggle="modal" data-target="#modal">
            </div>
            <?php endforeach; ?>
        </div>

        <?php if(count($data->gallery) > 0): ?>
        <div class="load_more">
            <a class="gallery_load_more">
                load more
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>

