<?php $video = $data->video; ?>
<div style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
    <video controls style="width: 95%; height: 95%;">
        <source src="/resources/files/upload/video/<?php echo $video->video_video; ?>" type="video/mp4">
    </video>
</div>
