<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">category</li>
        </ol>
        <div class="admin-page-title">
            <span>category</span>
        </div>
    </div>
    <div class="table-content">
        <table id="tableview" class="table-media my-3">
            <thead>
                <tr>
                    <th>
                        <img src="/resources/files/system/svg/delete.svg">
                    </th>
                    <th>
                        <img src="/resources/files/system/svg/update.svg">
                    </th>
                    <th>#</th>
                    <th>image</th>
                    <th>category</th>
                    <th>title</th>
                    <th>subtitle</th>
                    <th>status</th>
                    <th>created</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->category as $category):  ?>
                 <tr>
                    <td aria-label='delete'>
                        <a 
                            <?php if($category->category_id != 1): ?>
                                data-id="<?php echo $category->category_id; ?>" class="category_del"
                            <?php endif; ?>
                            >
                            <img src="/resources/files/system/svg/delete.svg">
                        </a>
                    </td>
                    <td aria-label='update'>
                        <a data-id="<?php echo $category->category_id; ?>" class="category_up">
                            <img src="/resources/files/system/svg/update.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $category->category_id; ?></td>
                    <td aria-label='image'>
                        <img src="/resources/files/upload/category/<?php echo $category->category_image; ?>">
                    </td>
                    <td aria-label='category'><?php echo $category->category; ?></td>
                    <td aria-label='title'><?php echo $category->category_title; ?></td>
                    <td aria-label='subtitle'><?php echo $category->category_subtitle; ?></td>
                    <td aria-label='status'>
                        <label class="switch">
                        <input 
                            <?php echo $category->category_id == 1 ?: 'type="checkbox"'; ?>
                            class="category_status" 
                            id="<?php echo $category->category_id; ?>"
                            <?php echo $category->category_status == 1 ? 'checked' : ''; ?> >
                        <span class="slider round"></span>
                        </label>
                    </td>
                    <td aria-label='created'><?php echo $category->category_created_at; ?></td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script type='text/javascript'>
    $('body').on('click', '.admin-btn', function() {
        history_load('/panel/category/create');
    });

    $('body').on('click', '.category_up', function() {
        url = '/panel/category/update/'+$(this).attr('data-id');
        history_update(url);
    });
</script>
