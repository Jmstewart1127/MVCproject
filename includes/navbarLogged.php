<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">TimeClock</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
                <li>
                    <a href="signup.php">Register</a>
                </li>
                <li>
                    <a href="logout.php" name="logout">Logout</a>
                </li>
                <li>
                    <form role="form" action="loggedIn.php" id="navLogin" method="POST" enctype="multipart/form-data">
                        <input type="text" id="username" name="username" placeholder="username">
                        <input type="password" id="password" name="password" placeholder="password">
                        <button type="submit" id="submit1" name="login" class="btn btn-default">Login</button>
                    </form>
                    <p style="color: white;">Hello, <?php $helloUser = new LoginController(); $helloUser->getUsername();?></p>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
