<?php include('dbInit.php'); ?>

<?php
    $newUser = new SignUpController();

    $view = new TimeClockView();

    if (isset($_POST['signupsubmit']))
    {
        $newUser->createNewUser();
        $view->postSignUpView();
    }
?>


