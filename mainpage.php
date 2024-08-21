<?php
session_start();
include 'student.php';
include 'adminlog.php';
  ?>	
		

<!DOCTYPE html>
<html>
<head><title>MANAGEMENT SYSTEM FOR JUNIOR SCHOOL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="mainpage.css"></head>
	
<body>
		
    <?php
include 'signup.php';
    ?>

			<script>
function check(){
  document.getElementById('signup').style.height="91%";
	document.getElementById('studentlog').style.display="none";

}

function close1nav(){
  document.getElementById('signup').style.height="0%";
	document.getElementById('studentlog').style.display="block";
  
}

</script>

<script>
function openav(){
	document.getElementById('studentlog').style.width="40%";
	document.getElementById('adminlog').style.display="none";
}

function closenav(){
	document.getElementById('studentlog').style.width="0%";
	document.getElementById('adminlog').style.display="block";

}

			</script>





</body>
</html>

