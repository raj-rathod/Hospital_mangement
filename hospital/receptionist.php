<?php
 session_start();
if (!isset($_SESSION['pid'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Hospital</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,500,700|Roboto:400,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>
  <!-- Page Content
    ================================================== -->
  <!-- Hero -->

  <section class="hero">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-12">
          <a class="hero-brand" href="index.php" title="Home"><img  class="rounded-circle" src="img/ff.jpg" height="90" width="90"></a>
        </div>
      </div>

      <div class="col-md-12">
        <h1>
            The Patient Experience
          </h1>

        <p class="tagline">
          Our role is not only to help patients heal physically but spiritually and emotionally....
        </p>
        <h2> Welcome : <?php echo $_SESSION['pname']; ?></h2>
        <a class="btn btn-full" href="registration/patdetails.php">Patient details</a>
          <a class="btn btn-full" href="registration/logout.php">Log Out</a>
      </div>
    </div>

  </section>
  <header id="header">
    <div class="container">
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li id="dd"><a href="#d">Doctors Detail</a></li>
          <li id="bd"><a href="#features">Bill Details</a></li>
          <li id="tpr"><a href="#portfolio">Todays Patient Report</a></li>
          <li id="pr"><a href="#t">Patient Reports</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->

          </div>
  </header>
  <!-- /About -->
    <div id="billdet" class="container">
    <div class="row">
      <div class="col-md-3"></div>
       <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Enter Patient  Detail</h3>
          </div>
          <div class="card-body bg-dark">
            <form>
             <div class="form-group">
                   <input type="text" class="form-input form-control" name="usn" id="pname" placeholder="Patient Name"/>    
             </div>
            </form>
          </div>
          <div class="card-footer bg-dark">
            <div class="btn btn-danger pdetial">Submit</div>
          </div>
          
        </div>
         </div>
       </div>
        <div class="col-md-3"></div>
    </div>
    <div id="pdreport" class="container">
    <div class="row">
      <div class="col-md-3"></div>
       <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Enter  Detail</h3>
          </div>
          <div class="card-body bg-dark">
            <form>
             <div class="form-group">
                   <h4 class="form-input form-control">Date  :  <input type="date" class="form-input" id="pdate"/> </h4>
                      
             </div>
            </form>
          </div>
          <div class="card-footer bg-dark">
            <div class="btn btn-danger pddetial">Submit</div>
          </div>
          
        </div>
         </div>
       </div>
        <div class="col-md-3"></div>
    </div>
  <!-- Team -->

   <div class="container mt-5" id="bill">
    <div class="card" >
      <h2 class="text-center ">Bill Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-2">
            <h3 class="text-center text-white">Patient Name</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Medicine Name</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Quantity</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Duration</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Price</h3>
          </div>
           <div class="col-md-2">
            <h3 class="text-center text-white">Action</h3>
          </div>

        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="presult"></div>
      </div>
    </div>
  </div>

   <div class="container mt-5" id="ddetail">
    <div class="card" >
      <h2 class="text-center ">Doctor Details</h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-3">
            <h3 class="text-center text-white">Doctor Name</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Department</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Designation</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Contact</h3>
          </div>
        </div>
      </div>
      <div class="card-body bg-dark">
        <div id="dresult"></div>
      </div>
    </div>
  </div>
   <div class="container mt-5" id="ptreport">
    <div class="card" >
      <h2 class="text-center ">Todays Patient Registration</h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-2">
            <h3 class="text-center text-white">Patient Name</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Doctor Name</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Disease</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Age</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Sex</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white"> Date</h3>
          </div>
        </div>
      </div>
      <div class="card-body bg-dark">
        <div id="ptresult"></div>
      </div>
    </div>
  </div>
  <div class="container mt-5" id="pdtreport">
    <div class="card" >
      <h2 class="text-center ">Patients Details</h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-2">
            <h3 class="text-center text-white">Patient Name</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Doctor Name</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Disease</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Age</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white">Sex</h3>
          </div>
          <div class="col-md-2">
            <h3 class="text-center text-white"> Date</h3>
          </div>
        </div>
      </div>
      <div class="card-body bg-dark">
        <div id="pdtresult"></div>
      </div>
    </div>
  </div>
  
<!-----footer---->
<?php
  include("footer.php");
?>

  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>


  <!-- Required JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/tether/js/tether.min.js"></script>
  <script src="lib/stellar/stellar.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/easing/easing.js"></script>
  <script src="lib/stickyjs/sticky.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/lockfixed/lockfixed.min.js"></script>

  <!-- Template Specisifc Custom Javascript File -->
  <script src="js/custom.js"></script>

  <script src="contactform/contactform.js"></script>

</body>
</html>
