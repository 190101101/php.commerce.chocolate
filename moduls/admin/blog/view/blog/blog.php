<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">blog</li>
        </ol>
        <div class="admin-page-title">
            <span>blog</span>
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
                    <th>title</th>
                    <th>subtitle</th>
                    <th>content</th>
                    <th>status</th>
                    <th>created</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($data->blog as $blog):  ?>
                 <tr>
                    <td aria-label='delete'>
                        <a data-id="<?php echo $blog->blog_id; ?>" class="blog_del">
                            <img src="/resources/files/system/svg/delete.svg">
                        </a>
                    </td>
                    <td aria-label='update'>
                        <a data-id="<?php echo $blog->blog_id; ?>" class="blog_up">
                            <img src="/resources/files/system/svg/update.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $blog->blog_id; ?></td>
                    <td aria-label='image'>
                        <img src="/resources/files/upload/blog/<?php echo $blog->blog_image; ?>">
                    </td>
                    <td aria-label='title'><?php echo $blog->blog_title; ?></td>
                    <td aria-label='subtitle'><?php echo $blog->blog_subtitle; ?></td>
                    <td aria-label='content'><?php echo substr(xhtml($blog->blog_content), 0, 50); ?>...</td>
                    <td aria-label='status'>
                        <label class="switch">
                        <input 
                            type="checkbox" 
                            class="blog_status" 
                            id="<?php echo $blog->blog_id; ?>"
                            <?php echo $blog->blog_status == 1 ? 'checked' : ''; ?> >
                        <span class="slider round"></span>
                        </label>
                    </td>
                    <td aria-label='created'><?php echo $blog->blog_created_at; ?></td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<script type='text/javascript'>
    $('body').on('click', '.admin-btn', function() {
        history_load('/panel/blog/create');
    });

    $('body').on('click', '.blog_up', function() {
        url = '/panel/blog/update/'+$(this).attr('data-id');
        history_update(url);
    });
</script>

