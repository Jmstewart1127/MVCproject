<?php include('dbInit.php'); ?>

<?php
    $user = new User();
    $login = new LoginController();
    $view = new TimeClockView();

    global $database;
    global $session;
    if ($session->is_signed_in()) {
        $login->redirect('userLoggedIn.php');
    }

    if (isset($_POST['login'])) {
        global $database;
        $username = isset($_POST["username"]) ? $_POST["username"] : 0;
        $password = isset($_POST["password"]) ? $_POST["password"] : 0;
        $user->setUsername($username);
        $user_found = LoginController::verify_user($username, $password); // method to check db user.


        if ($user_found) {
            $session->login($user_found);
            $user::find_user_by_id($_SESSION['user_id']);
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
