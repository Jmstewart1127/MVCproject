<?php include('dbInit.php'); ?>

<?php
    $time = new TimeClock();
    $user = new LoginController();
    echo "Start Time: " . $time->currentTime();

    $db = new Database();
    $db->open_db_connection();
//
//    $time->addCurrentTime($time->currentTime(), $user->username);
?>