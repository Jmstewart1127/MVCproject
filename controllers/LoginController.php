<?php

class LoginController extends Session
{

    private $username;
    private $password;
    private $helloUser;

    public function loginUser()
    {
        $session = new Session();

        if ($session->is_signed_in()) {
            redirect('index.php');
        }

        if (isset($_POST['login'])) {
            session_start();
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $user_found = User::verify_user($username, $password); // method to check db user.

            if ($user_found) {
                $session->login($user_found);
                echo "done";
            }
            else {
                $this->the_message = "Your password or username in invalid.";
            }
        }
        else {
            $this->username = "";
            $this->password = "";
        }

    }

    public function logoutUser()
    {
        $this->logout();
    }

    public function getUserName()
    {
        return $this->helloUser = $_SESSION['username'];
    }

}