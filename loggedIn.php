<?php include('dbInit.php'); ?>

<?php
    $login = new LoginController();
    $view = new TimeClockView();

    function redirect($location)
    {
        header("Location: {$location}");
    }

    if ($session->is_signed_in()) {
        redirect('userLoggedIn.php');
    }
    if (isset($_POST['submit'])) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $user_found = User::verify_user($username, $password); // method to check db user.
        if ($user_found) {
            $session->login($user_found);
            $login->setUsername($_POST['username']);
        }
        else {
            $the_message = "Your password or username in invalid.";
        }
    }
    else {
        $username = "";
        $password = "";
    }

    $view->loggedInView();
?>

