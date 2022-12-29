<?php $main = new core\controller; ?>
<?php $main->view('main', 'requires', 'main', 'css'); ?>
    <?php echo $data['VIEW']; ?>
<?php $main->view('main', 'requires', 'main', 'js'); ?>
