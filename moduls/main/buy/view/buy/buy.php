<div class="general-form-tab">
    <ul class="nav nav-tab" role="tablist">
        <li>
            <a>
                <img src="../resources/files/system/svg/basket.svg">
                <span>покупки</span>
            </a>
        </li>
    </ul>
</div>

<div class="table-content buyread">
    <table class="table-media my-3">
        <thead>
            <tr>
                <th>
                    <img src="/resources/files/system/svg/update.svg">
                </th>
                <th>buy id</th>
                <th>price</th>
                <th>created at</th>
            </tr>
        </thead>
        <tbody>

            <?php 
                $total_amount = 0;
                $number_of_purchases = 0;

            ?>

            <?php foreach($data->buy as $buy): ?>
                <?php $number_of_purchases++; ?>
             <tr>
                <td aria-label='update'>
                    <a data-id="<?php echo $buy->buy_id; ?>"
                        type="button" class="buy_btn" data-toggle="modal" data-target="#bigModalscroll">
                        <img src="/resources/files/system/svg/update.svg">
                    </a>
                </td>
                <td aria-label='buy id'><?php echo $buy->buy_id; ?></td>
                <td aria-label='price'><?php echo $total_amount+=$buy->buy_price; ?> $</td>
                <td aria-label='#'><?php echo $buy->buy_created_at; ?></td>
             </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

        <div class="table-content">
        <table class="table-media my-3 horizontal">
            <thead>
                <tr>
                    <th>количество покупок</th>
                    <th>Общая сумма</th>
                </tr>
            </thead>
            <tbody>
                 <tr>
                    <td aria-label='количество покупок'><?php echo $number_of_purchases; ?></td>
                    <td aria-label='Общая сумма'><?php echo $total_amount; ?> $</td>
                 </tr>
            </tbody>
        </table>
    </div>
</div>

<script>
$(function(){
    $('body').on('click', '.buy_btn', function(){
       url = '/buy/read/'+$(this).attr('data-id');
        $('.main_modal .modal-body').load(url);
    });
});
</script>
