<?php

class Session
{

    private $signed_in = false;
    public $user_id;
    public $message;
    public $the_message;

    function __construct()
    {   // create session and check if
        //  user is signed in... on app start.
        session_start();
        $this->check_the_login();
        $this->check_message();

    }

    public function is_signed_in()
    {  // returns status of session,
        //   true or false.
        return $this->signed_in;
    }


    public function login($user)
    { // creates session for user
        // by id.
        if ($user)
        {
            $this->user_id = $_SESSION['user_id'] = $user->id;
            $this->signed_in = true;
        }

    }


    public function logout()
    {  // allows user to logout.

        unset($_SESSION['user_id']);
        unset($this->user_id);
        $this->signed_in = false;

    }


    public function check_the_login()
    {   //sets $signed_in to true
        // if user is signed in.
        if (isset($_SESSION['user_id']))
        {
            $this->user_id = $_SESSION['user_id'];
            $this->signed_in = true;
            return $this->user_id;
        }
        else
        {
            unset($this->user_id);
            $this->signed_in = false;
        }

    }

    public function message($msg = "Logged In")
    {
        if (!empty($msg))
        {
            $_SESSION['message'] = $msg;
        }
        else
        {
            echo $this->message;
        }
    }

    private function check_message()
    {
        if (isset($_SESSION['message']))
        {
            $this->message = $_SESSION['message'];
            unset($_SESSION['message']);
        }
        else
        {
            $this->message = "";
        }
    }








}
$session = new Session();

?>
