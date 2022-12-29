<?php $product = $data->product; ?>
<div class="admin-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a href="/admin/image/product/all/<?php echo $data->product->product_id; ?>">
                <img src="../resources/files/system/svg/update.svg">
                <span>изображение по продукту</span>
            </a>
        </li>
    </ul>
</div>

<!-- <form action="/admin/image/create" method="POST" class="general_form" enctype="multipart/form-data"> -->
<form class="general_form image_create">
    <div class="form_box">
        <input type="file" name="image_image[]" multiple id="archivefile" onchange="fileupload()" required>
        <input type="hidden" name="product_id" value="<?php echo $product->product_id; ?>" readonly required>
    </div>
    <div class="form_box tag_progress">
        <progress class="tagprogress" id="progressBar" value="0" max="100"></progress>
        <span id="uploadstatus">отчет загруженных файлов</span>
    </div>
    <div class="form_box">
        <button>upload</button>
    </div>
</form>

<div class="table-content">
    <table id="loader" class="table-media image-history-table my-3">
        <thead>
            <tr>
                <th> 
                    <img src="/resources/files/system/svg/delete.svg"> 
                </th>
                <th>image</th>
                <th>
                    <img src="/resources/files/system/svg/update.svg">
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data->image as $image): ?>
             <tr>
                <td aria-label='delete'>
                    <a data-id="<?php echo $image->image_id; ?>" class="image_del">
                        <img src="/resources/files/system/svg/delete.svg">
                    </a>
                </td>
                <td aria-label='image'>
                    <img src="/resources/files/upload/image/<?php echo $image->image_image; ?>">
                </td>
                <td aria-label='update'>
                    <a data-id="<?php echo $image->image_id; ?>"
                        type="button" class="image_btn" data-toggle="modal" data-target="#mainmodal">
                        <img src="/resources/files/system/svg/update.svg">
                    </a>
                </td>
             </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(function(){
        $('body').on('click', '.image_btn', function(){
           url = '/panel/image/product/look/'+$(this).attr('data-id');
            $('.main_modal .modal-body').load(url);
        });
    });
</script>



