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
        <div class="card-columns gallery_content"
            data-start="<?php echo count($data->video); ?>">
            <?php foreach($data->video as $video): ?>
            <div class="card">
                <img data-id="/video/videoLook/<?php echo $video->video_id; ?>" 
                    class="video_btn card-img-top"
                    src="/resources/files/upload/video/<?php echo $video->video_image; ?>" 
                    data-toggle="modal" data-target="#bigModal">
            </div>
            <?php endforeach; ?>
        </div>

        <?php if(count($data->video) > 0): ?>
        <div class="load_more">
            <a class="video_load_more">
                load more
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>

<script>
    $('body').on('click', '.video_btn', function() {
        url = $(this).attr('data-id');
        $('.main_modal .modal-body').load(url);
    });
</script>

