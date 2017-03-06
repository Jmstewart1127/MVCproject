<?php

class LoginController extends User
{

    public $username;
    private $signed_in = false;
    public $user_id;
    public $message;
    public $the_message;

//    function __construct()
//    {
//        //  check if user is signed in... on app start.
//
//        $this->checkTheLogin();
//        $this->checkMessage();
//    }

    public function startSession()
    {
        return session_start();
    }

    public function login($user)
    { // creates session for user
        // by id.
        if ($user)
        {
            $this->username = $_SESSION['user_id'];
            $this->signed_in = true;
        }

    }

    public function checkTheLogin()
    {   //sets $signed_in to true
        // if user is signed in.
        if (isset($_SESSION['username']))
        {
            $this->username = $_SESSION['username'];
            $this->signed_in = true;
        }
        else
        {
            unset($this->user_id);
            $this->signed_in = false;
        }
    }

    public function checkMessage()
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

    public function redirect($location)
    {
        header("Location: {$location}");
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }


}