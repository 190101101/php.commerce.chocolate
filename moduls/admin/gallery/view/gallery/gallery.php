<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">gallery</li>
        </ol>
        <div class="admin-page-title">
            <span>gallery</span>
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
                    <th>gallery</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->gallery as $gallery):  ?>
                 <tr>
                    <td aria-label='delete'>
                        <a data-id="<?php echo $gallery->gallery_id; ?>" class="gallery_del">
                            <img src="/resources/files/system/svg/delete.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $gallery->gallery_id; ?></td>
                    <td aria-label='gallery'>
                        <img src="/resources/files/upload/gallery/<?php echo $gallery->gallery_image; ?>">
                    </td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script type='text/javascript'>
    $('body').on('click', '.admin-btn', function() {
        history_load('/panel/gallery/create');
    });
</script>
