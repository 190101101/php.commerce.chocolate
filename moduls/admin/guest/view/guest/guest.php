<div class="admin-page-content">
    <div class="admin-page-content-head">
        <ol class="admin-breadcrumb">
            <li><a href="/panel">home</a></li>
            <li class="breadcrumb-active">guest</li>
        </ol>
        <div class="admin-page-title">
            <span>guest</span>
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
                    <th>
                        <img src="/resources/files/system/svg/id.svg">
                    </th>
                    <th>ip</th>
                    <th>created</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; foreach($data->guest as $guest):  ?>
                 <tr>
                    <td aria-label='delete'>
                        <a data-id="<?php echo $guest->guest_id; ?>" class="guest_del">
                            <img src="/resources/files/system/svg/delete.svg">
                        </a>
                    </td>
                    <td aria-label='#'><?php echo $i++; ?></td>
                    <td aria-label='#'><?php echo $guest->guest_id; ?></td>
                    <td aria-label='ip'><?php echo $guest->guest_ip; ?></td>
                    <td aria-label='created'><?php echo $guest->guest_created_at; ?></td>
                 </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
