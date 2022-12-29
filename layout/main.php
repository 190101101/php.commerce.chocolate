<?php $main = new core\controller; ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <?php $main->view('main', 'requires', 'main', 'meta'); ?>
        <?php $main->view('main', 'requires', 'main', 'css'); ?>
        <title>chocolate</title>
    </head>
    <body class="body">
        <div id="wrapper">
            <?php $main->view('main', 'requires', 'sidebar', 'history'); ?>
            <?php $main->view('main', 'requires', 'main', 'nav'); ?>
            <?php $main->view('main', 'requires', 'sidebar', 'sidebar'); ?>
            <div class="wrap">
                <div class="content">
                    <div class="inner-content page-content inner-not-vh">
                        <div class="page-container">
                            <?php echo $data['VIEW']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php $main->view('main', 'requires', 'main', 'footer'); ?>
        <?php $main->view('main', 'requires', 'widget', 'modal'); ?>
        <?php $main->view('main', 'requires', 'main', 'js'); ?>
    </body>
</html>
