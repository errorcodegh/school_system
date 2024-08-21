<?php
session_start();
$connection = mysqli_connect("localhost","root","","schoolsystem");
$database = mysqli_select_db($connection,"schoolsystem");

$id=$_SESSION['id'];
$sql="SELECT * FROM studentlog WHERE id='$id'";
$data=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($data);
?>


<!DOCTYPE html>
<html>
<head><title>open system</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="openpage.css">
</head>
<body>

	<div id="firsttop">
     <p id="p">Pentecoast Junior School</p>
     <p id="p">Pentecoast Junior School</p>
     <p id="p">Pentecoast Junior School</p>
     <p id="p">About School</p>
     <p id="p">Settings</p>
     <a href="logout.php" id="p">Log Out</a>

 </div>

    <div id="secondtop">
 
     <div id="stud">
      <p>Total Student</p>
      <span><i class="fa fa-graduation-cap" id="icon1"></i></span>
      <p id="ic">
        <?php 
       $sql = "SELECT * from studentlog";
       $data = mysqli_query($connection,$sql);
       $result = mysqli_num_rows($data);
       echo $result;
       ?>
      </p>
     </div>

      <div id="stud1">
      <p>Total Teachers</p>
      <span><i class="fa fa-users" id="icon1"></i></span>
      <p id="ic">000</p>
     </div>

     <div id="stud3">
      <p>Total Admin</p>
      <span><i class="fa fa-user-circle" id="icon1"></i></span>
      <p id="ic">
        <?php 
$connection = mysqli_connect("localhost","root","","system_admin");
$database = mysqli_select_db($connection,"system_admin");
       $sql = "SELECT * from admintable";
       $data = mysqli_query($connection,$sql);
       $result = mysqli_num_rows($data);
       echo $result;
  

?>
  
</p>
     </div>

    </div>

  <div id="main">

  	<div id="left">
  <div id="my">
    <h4 id="pro">Hello <?php echo @$row["username"]; ?></h4>

    <p><?php echo'<img height="100" width="100" style="border-radius:50%;" src="'.@$row['image'].'">'; ?></p>
    <a href="profilepage.php" id="pro">User Profile</a>

  </div>
    <a href="#" id="lk">Student Account</a><br>
    <a href="#" id="lk">Teachers Account</a><br>
    <a href="#" id="lk">Student Classes</a><br>
    <a href="#" id="lk">Fees Management</a><br>
    <a href="#" id="lk">Transport Management</a><br>
    <a href="#" id="lk">Examination Management</a><br>
    <a href="#" id="lk">Teachers Management</a><br>
    <a href="#" id="lk">Report Management</a><br>
    <a href="#" id="lk">Time Table Management</a><br>
    <a href="#" id="lk">Student Management</a><br>
  	</div>

  	<div id="right">

  	</div>

  </div>

</body>
</html>