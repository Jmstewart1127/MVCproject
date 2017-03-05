<?php

// Database connection constants

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','Js1029492');
define('DB_NAME','timeClock');

// Class files

include('classes/Database.php');
include('classes/Session.php');
include('classes/User.php');

// Views

include('views/TimeClockView.php');

// Controllers

include('controllers/SignUpController.php');
include('controllers/LoginController.php');


?>
