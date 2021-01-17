<?php
$con=mysqli_connect('localhost','root','','hospital');
session_start();
if (isset($_POST['rec'])) {
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$email=$_POST['email'];
	$pno=$_POST['pno'];
	$psw=$_POST['psw'];
	$sql="SELECT * FROM rec_info WHERE uname='$uname'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "Username already exist please change your username";
	}else{
		$sql="INSERT INTO `rec_info` (`p_id`, `name`, `uname`, `email`, `pno`, `psw`, `rec`)
		 VALUES (NULL, '$name', '$uname', '$email', '$pno', '$psw', '1')";
		$run=mysqli_query($con,$sql);
		if ($run) {
			$_SESSION['pid']=mysqli_insert_id();
			$_SESSION['pname']=$name;
			header('location:reclogin.php');
		}
	}
}
if (isset($_POST['reclog'])) {
	$uname=$_POST['name'];
	$psw=$_POST['psw'];
	$sql="SELECT * FROM rec_info WHERE uname='$uname'AND psw='$psw'";
	$run=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($run);
	if(mysqli_num_rows($run)==1){
		$_SESSION['pid']=$row['p_id'];
		$_SESSION['pname']=$row['name'];
		header('location:../receptionist.php');
	}
}
if (isset($_POST['docsign'])) {
	$name=$_POST['name'];
	$uname=$_POST['uname'];
	$dept=$_POST['dept'];
	$pno=$_POST['pno'];
	$desg=$_POST['desg'];
	$adds=$_POST['add'];
	$psw=$_POST['psw'];
	$sql="SELECT * FROM doctor WHERE uname='$uname'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)>0) {
		echo "Username already exist please change your username";
	}else{
		$sql="INSERT INTO `doctor` (`d_id`, `name`, `uname`, `dept`, `desg`, `pno`, `adds`,`psw`) 
		VALUES (NULL, '$name', '$uname','$dept', '$desg', '$pno', '$adds','$psw')";
		$run=mysqli_query($con,$sql);
		if ($run) {
			$_SESSION['did']=mysqli_insert_id();
			$_SESSION['dname']=$name;
			header('location:doclogin.php');
		}
	}
}
if (isset($_POST['doclog'])) {
	$uname=$_POST['name'];
	$psw=$_POST['psw'];
	$sql="SELECT * FROM doctor WHERE uname='$uname'AND psw='$psw'";
	$run=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($run);
	if(mysqli_num_rows($run)==1){
		$_SESSION['did']=$row['d_id'];
		$_SESSION['dname']=$row['name'];
		header('location:../docpat.php');
	}
}
if (isset($_POST['patsub'])) {
	$name=$_POST['name'];
	$dname=$_POST['dname'];
	$dept=$_POST['dept'];
	$age=$_POST['age'];
	$sex=$_POST['sex'];
	$dis=$_POST['dis'];
	$pno=$_POST['pno'];
	$adds=$_POST['add'];
	$date=date("Y-m-d");
	$sql="INSERT INTO `patient` (`pat_id`, `name`, `dname`, `dept`, `age`, `sex`, `dis`, `pno`, `adds`, `regdate` ,`showp`)
	 VALUES (NULL, '$name', '$dname', '$dept', '$age', '$sex', '$dis', '$pno', '$adds','$date','0')";
	$run=mysqli_query($con,$sql);
	if ($run) {
		header('location:../receptionist.php');
	}
}
if (isset($_POST['med'])) {
	$pname=$_POST['pname'];
	$mname=$_POST['mname'];
	$mprice=$_POST['mprice'];
	$qty=$_POST['qty'];
	$durt=$_POST['durt'];
	$sql="INSERT INTO `medicine` (`pid`, `pname`, `mname`, `qty`, `durt`, `price`) 
	VALUES (NULL, '$pname', '$mname', '$qty', '$durt', '$mprice')";
	$run=mysqli_query($con,$sql);
	if ($run) {
		header('location:../docpat.php');
	}
}
if (isset($_POST['delete'])) {
	$pid=$_POST['pid'];
	$dname=$_SESSION['dname'];
	$sql="UPDATE patient SET showp='1' WHERE pat_id='$pid'AND dname='$dname'";
	$run=mysqli_query($con,$sql);
}

if (isset($_POST['pdetial'])) {
	$pname=$_POST['pname'];
    $sql="SELECT * FROM medicine WHERE pname='$pname'" ;
         $run=mysqli_query($con,$sql);
         if (mysqli_num_rows($run)==0) {
		      echo "<h3 class='text-white text-center'> Result Not found</h3>";
	     }else{
             while($row=mysqli_fetch_array($run)){
              $pname=$row['pname'];
              $mname=$row['mname'];
              $pid=$row['pid'];
              $qty=$row['qty'];
              $durt=$row['durt'];
              $price=$row['price'];
              echo "  <div class='row'>
          <div class='col-md-2'>
            <h3 class='text-center text-white'> $pname</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$mname</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$qty</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$durt</h3>
          </div>
           <div class='col-md-2'>
            <h3 class='text-center text-white'>$price</h3>
          </div>
          <div class='col-md-2'>
            <div class='btn btn-full bill' pid='$pid' >Print</div>
          </div>
        
        </div> <br>";
             }
      }       
}
if (isset($_POST['dd'])) {
	     $sql="SELECT * FROM doctor";
             $run=mysqli_query($con,$sql);
             while($row=mysqli_fetch_array($run)){
              $dname=$row['name'];
              $dept=$row['dept'];
              $desg=$row['desg'];
              $pno=$row['pno'];
              echo "  <div class='row'>
          <div class='col-md-3'>
            <h3 class='text-center text-white'> $dname</h3>
          </div>
          <div class='col-md-3'>
            <h3 class='text-center text-white'>$dept</h3>
          </div>
          <div class='col-md-3'>
            <h3 class='text-center text-white'>$desg</h3>
          </div>
          <div class='col-md-3'>
            <h3 class='text-center text-white'>$pno</h3>
          </div>
        
        </div><br>";
             }
}
if (isset($_POST['tpr'])) {
	$date=date("Y-m-d");
	$sql="SELECT * FROM patient WHERE regdate='$date'";
	$run=mysqli_query($con,$sql);
	 while($row=mysqli_fetch_array($run)){
              $dname=$row['dname'];
              $dis=$row['dis'];
              $age=$row['age'];
              $sex=$row['sex'];
              $name=$row['name'];
              $date=$row['regdate'];
               echo "  <div class='row'>
          <div class='col-md-2'>
            <h3 class='text-center text-white'> $name</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$dname</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$dis</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$age</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$sex</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$date</h3>
          </div>
        
        </div><br>";

      }
}
if (isset($_POST['pddetial'])) {
	$pdate=$_POST['pdate'];
	$sql="SELECT * FROM patient WHERE regdate='$pdate'";
	$run=mysqli_query($con,$sql);
	if (mysqli_num_rows($run)==0) {
		      echo "<h3 class='text-white text-center'> Result Not found</h3>";
	     }else{
	 while($row=mysqli_fetch_array($run)){
              $dname=$row['dname'];
              $dis=$row['dis'];
              $age=$row['age'];
              $sex=$row['sex'];
              $name=$row['name'];
              $date=$row['regdate'];
               echo "  <div class='row'>
          <div class='col-md-2'>
            <h3 class='text-center text-white'> $name</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$dname</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$dis</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$age</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$sex</h3>
          </div>
          <div class='col-md-2'>
            <h3 class='text-center text-white'>$date</h3>
          </div>
        
        </div><br>";

      }
   }
}
if (isset($_POST['print'])) {
  $pid=$_POST['pid'];
  $sql="DELETE FROM medicine WHERE pid='$pid' ";
  $run=mysqli_query($con,$sql);
  if ($run) {
  	echo "Payment Successful...Thank you ....Take care";
  }
}
?>