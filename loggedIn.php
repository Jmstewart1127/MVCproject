<?php include('dbInit.php'); ?>

<?php
    $login = new LoginController();
    $view = new TimeClockView();

    $login->loginUser();

    $view->loggedInView();
?>

