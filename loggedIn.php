<?php include('dbInit.php'); ?>

<?php
    $login = new LoginController();
    $view = new TimeClockView();

    if ($session->is_signed_in()) {
        $login->redirect('userLoggedIn.php');
    }

    if (isset($_POST['login'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $user_found = LoginController::verify_user($username, $password); // method to check db user.

        if ($user_found) {
            $login->checkTheLogin();
            $login->startSession();
            $login->login($username);
        }
        else
        {
            $the_message = "Your password or username in invalid.";
        }

    }
    else
    {
        $username = "";
        $password = "";
    }

    $view->loggedInView();
?>

