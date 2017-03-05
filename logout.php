<?php include('dbInit.php'); ?>

<?php
    $logout = new LoginController();
    $view = new TimeClockView();

    if (isset($_POST['logout']))
    {
        $logout->logout();
    }

    $view->indexView();
?>
