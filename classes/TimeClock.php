<?php

class TimeClock
{
    private $currentTime;
    private $startTime;
    private $endTime;
    private $totalTime;


//    public function addCurrentTime($time)
//    {
//        global $database;
//        $sql = "INSERT INTO users (startTime)
//                VALUES ('".$time."')";
//    }

//    public function addCurrentTime($time)
//    {   // Creates new user
//        global $database;
//        $user = new LoginController();
//        $userThis = $user->user_id;
//
//        $sql = "INSERT INTO users WHERE id = ({'$userThis'})
//                VALUES ('$time')";
//
//        if ($database->query($sql))
//        {
//            $database->the_insert_id();
//            return true;
//        }
//        else
//        {
//            return false;
//        }
//    }

    public function currentTime()
    {
        return $this->currentTime = time();
    }


}