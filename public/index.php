
<?php
session_start();
require_once __DIR__ . '/../bootstrap.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Wutsin Wheels</title>
    <?php require '../views/partials/head.php'; ?>
</head>
<body class="<?= (isset($black_background)) ? 'black-background' : '' ?>">
    <?php require '../views/partials/navbar.php'; ?>

    <?php require $main_view; ?>

    <?php require '../views/partials/common_js.php'; ?>
    <div class="copyright">Copyright &copy Mittsy Tidwell, Wyatt Barnes, Justin Reich 2016</div>
    
</body>
</html>
