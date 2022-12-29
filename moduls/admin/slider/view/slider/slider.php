<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">slider</li>
        </ol>
        <div class="admin-page-title">
            <span>slider</span>
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
                    <th>slider</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->slider as $slider):  ?>
                 <tr>
                    <td aria-label='delete'>
                        <a data-id="<?php echo $slider->slider_id; ?>" class="slider_del">
                            <img src="/resources/files/system/svg/delete.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $slider->slider_id; ?></td>
                    <td aria-label='slider'>
                        <img src="/resources/files/upload/slider/<?php echo $slider->slider_image; ?>">
                    </td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script type='text/javascript'>
    $('body').on('click', '.admin-btn', function() {
        history_load('/panel/slider/create');
    });
</script>
