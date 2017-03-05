<?php

class SignUpController extends User
{


    public function createNewUser()
    {
        $this->username = $_POST['username'];
        $this->password = $_POST['password'];
        $this->create();

        echo "done";
    }

}

?>