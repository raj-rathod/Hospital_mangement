<?php
include('../action.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <form method="post" id="signup-form" class="signup-form">
                    <h2>Doctor Details </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Your Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="uname" id="name" placeholder="Username"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="dept" id="name" placeholder="Department"/>
                    </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="desg" id="name" placeholder="Designation"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="pno" id="name" placeholder="Phone : No."/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="add" id="name" placeholder="Address:"/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-input" name="psw" id="password" placeholder="Password"/>
                        <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="docsign" id="submit" class="form-submit submit" value="Sign Up"/>
                        <a href="reclogin.php" class="submit-link submit">Sign In</a>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>