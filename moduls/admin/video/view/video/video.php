<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">video</li>
        </ol>
        <div class="admin-page-title">
            <span>video</span>
        </div>
    </div>
    <div class="table-content">
        <table id="tableview" class="table-media my-3">
            <thead>
                <tr>
                    <th>
                        <img src="/resources/files/system/svg/delete.svg">
                    </th>
                    <th>#</th>
                    <th>type</th>
                    <th>image</th>
                    <th>video</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->video as $video):  ?>
                 <tr>
                    <td aria-label='delete'>
                        <a data-id="<?php echo $video->video_id; ?>" class="video_del">
                            <img src="/resources/files/system/svg/delete.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $video->video_id; ?></td>
                    <td aria-label='type'><?php echo $video->video_type; ?></td>
                    <td aria-label='image'>
                        <img src="/resources/files/upload/video/<?php echo $video->video_image; ?>">
                    </td>
                    <td aria-label='video'>
                        <a data-id="<?php echo $video->video_id; ?>"
                            type="button" class="video_btn" data-toggle="modal" data-target="#mainmodal">
                            <img src="/resources/files/system/svg/videolink.svg">
                        </a>
                    </td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script type='text/javascript'>
    $('body').on('click', '.admin-btn', function() {
        history_load('/panel/video/create');
    });

    $('body').on('click', '.video_btn', function(){
       url = '/panel/video/videoLook/'+$(this).attr('data-id');
        $('.main_modal .modal-body').load(url);
    });
</script>

