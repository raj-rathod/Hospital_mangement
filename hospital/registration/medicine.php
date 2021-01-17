<?php
 include('../action.php');
if (!isset($_SESSION['did'])) {
    header('location:doclogin.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Receptionist </title>

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
                    <h2>Medicine Details </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="pname" id="name" placeholder="Patient  Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="mname" id="name" placeholder="Medicine  Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="mprice" id="name" placeholder="Medicine Price"/>
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-input" name="qty" id="name" placeholder="Quantity"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="durt" id="name" placeholder="Duration"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="med" id="submit" class="form-submit submit" value="Submit"/>
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