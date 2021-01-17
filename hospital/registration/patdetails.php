<?php
    include('../action.php');
 if (!isset($_SESSION['pid'])) {
     header('location:reclogin.php');
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
                    <h2>Patient Details </h2>
                    <div class="form-group">
                        <input type="text" class="form-input" name="name" id="name" placeholder="Patient Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="dname" id="name" placeholder="Doctor Name"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="dept" id="name" placeholder="Doctor department"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="age" id="name" placeholder="Age "/>
                    </div>
                   <div class=" form-group ">
                     <input type="radio" class="form-check-input" id="name" name="sex" value="Male">Male
                  </div>
                 <div class=" form-group">
                    <input type="radio" class="form-check-input" id="name" name="sex" value="Female">Female
                  </div>
                     <div class="form-group">
                        <input type="text" class="form-input" name="dis" id="name" placeholder="Disease"/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="pno" id="name" placeholder="Phone : No."/>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-input" name="add" id="name" placeholder="Address:"/>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="patsub" id="submit" class="form-submit submit" value="Submit"/>
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