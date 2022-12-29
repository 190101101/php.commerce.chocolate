<?php $main = new core\controller; ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?php $main->view('admin', 'requires', 'main', 'meta'); ?>
        <?php $main->view('admin', 'requires', 'main', 'css'); ?>
        <title>melancholic</title>
    </head>
    <body class="body">
        <div id="wrapper">
            <?php $main->view('admin', 'requires', 'sidebar', 'history'); ?>
            <?php $main->view('admin', 'requires', 'main', 'nav'); ?>
            <div class="wrap">
                <div class="admin-content">
                    <div class="admin-inner-content">
                        <?php $main->view('admin', 'requires', 'sidebar', 'sidebar'); ?>
                        <?php echo $data['VIEW']; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $main->view('admin', 'requires', 'main', 'footer'); ?>
        <?php $main->view('admin', 'requires', 'widget', 'modal'); ?>
        <?php $main->view('admin', 'requires', 'main', 'js'); ?>
    </body>
</html>