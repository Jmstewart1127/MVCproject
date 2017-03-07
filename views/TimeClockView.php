<?php

class TimeClockView
{


    public function indexView()
    {
        include("includes/head.php");
        echo '<body>';

        //<!-- Navigation -->
        include("includes/navbar.php");

        //<!-- Page Content -->
        include("includes/pageContent.php");


        echo            '<!-- jQuery Version 1.11.1 -->';
        echo       '<script src="js/jquery.js"></script>';

        //<!-- AJAX Scripts --
        //<script src="ajax/ajaxJquery.js"></script>

        //<!-- Bootstrap Core JavaScript -->
        echo       '<script src="js/bootstrap.min.js"></script>';
        echo       '</body>';
        echo       '</html>';
    }


    public function signUpFormView()
    {
        include("includes/head.php");
        echo '<body>';

                        //<!-- Navigation -->
                    include("includes/navbar.php");
                    
                        //<!-- Page Content -->
                    include("includes/pageContent.php");
                    
                        //<!-- Sign-Up -->
                    include("includes/signupForm.php");
                
        echo            '<!-- jQuery Version 1.11.1 -->';
        echo       '<script src="js/jquery.js"></script>';
                
                    //<!-- AJAX Scripts --
                    //<script src="ajax/ajaxJquery.js"></script>
                
                    //<!-- Bootstrap Core JavaScript -->
        echo       '<script src="js/bootstrap.min.js"></script>';
        echo       '</body>';
        echo       '</html>';
    }

    public function postSignUpView()
    {
        include("includes/head.php");
        echo '<body>';

                    //<!-- Navigation -->
                   include('includes/navbar.php');

        echo       '<h3 style="text-align: center;">Success! You can now log into your account.</h3>';

                    //<!-- Page Content -->
                   include('includes/pageContent.php');
                    
                    //<!-- jQuery Version 1.11.1 -->
        echo        '<script src="js/jquery.js"></script>';
                    
                    //<!-- Bootstrap Core JavaScript -->
        echo        '<script src="js/bootstrap.min.js"></script>';
        echo        '</body>';
        echo        '</html>';
    }

    public function loggedInView()
    {
        include("includes/head.php");
        echo '<body>';

        //<!-- Navigation -->
        include("includes/navbarLogged.php");

        //<!-- Page Content -->
        include("includes/timePunch.php");


        echo            '<!-- jQuery Version 1.11.1 -->';
        echo       '<script src="js/jquery.js"></script>';


        //<!-- Bootstrap Core JavaScript -->
        echo       '<script src="js/bootstrap.min.js"></script>';
        echo       '</body>';
        echo       '</html>';
    }

}

?>