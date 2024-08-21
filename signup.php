<?php
$connection = mysqli_connect("localhost","root","","schoolsystem");
$database = mysqli_select_db($connection,"schoolsystem");

$username = $password = $email = $phone = $file = "";
$usernamerr = $passwordrr = $emailrr = $phonerr = $errormsg = "";

if(isset($_POST["submit"])){

	 $file = @$_FILES['image']['name'];

	if(!empty($_POST["username"])){
      $username = $_POST["username"];
	}
	else {
		$usernamerr = "error";
	}

	if(!empty($_POST["password"])){
      $password = $_POST["password"];
	}
	else {
		$passwordrr = "error";
	}

	if(!empty($_POST["email"])){
      $email = $_POST["email"];
	}
	else {
		$emailrr = "error";
	}

	if(!empty($_POST["phone"])){
      $phone = $_POST["phone"];
	}
	else {
		$phonerr = "error";
	}


	$sql = "INSERT INTO studentlog(username,password,phone,email,image) VALUES('$username','$password','$phone','$email','$file')";
	$data = mysqli_query($connection,$sql);
	
	if($data){
		move_uploaded_file(@$_FILES['image']['temp_name'], "$file");
	}


if(!empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["phone"]) && !empty($_POST["email"])){
	echo "<script>alert('succesfull...login to continue to mainpage');
    document.location='mainpage.php';
	</script>";
	
}

else{
	$errormsg = "empty fields";
}


}



?>



<!DOCTYPE html>
<html>
<head><title>MANAGEMENT SYSTEM FOR JUNIOR SCHOOL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>


*{
	padding: 0px;
	border: 0px;
	margin: 0px;
	
}

#signup{
	border: 1px solid white;
	width: 40%;
	height: 0%;
	margin-top: 2em;
	line-height: 2em;
	position: fixed;
	top: 0;
	left: 19em;
	z-index: 1;
	overflow: hidden;
	background: gold;
	transition: 0.9s;

}

#user1{
	width: 20em;
	height: 2.5em;
	text-align: center;
	font-weight: bold;
}

#icon{
	font-size: 4em;
}

label{
	font-weight: bold;
	color: black;
}

#sub1{
	font-size: 1.2em;
	font-weight: bold;
	background: none;
}

#sub1:hover{
	font-size: 1.5em;
}

#user1:hover{
   font-size: 0.9em;
}

span{
	color: black;
}

	#back{
     position: absolute;
     right: 2em;
     top: 10px;
     background: none;
     color: white;
     font-weight: bold;
	}

#profile{
	font-weight: bold;

}



</style>


</head>

<body>
	<center>
<div id="signup">
	<form method="POST" action="signup.php" enctype="multipart/form-data">
		<button onclick="closenav()" id="back"><i class="fa fa-arrow-left"></i></i></button>
		<h2 style="color: red;">Sign<span>Up</span></h2>
		<div><i class="fa fa-user-circle" id="icon" style="background-color: gold;"></i></div>
		<label for="username">UserName</label><br>
		<input type="text" name="username" placeholder="username" id="user1" required><br>

		<label for="email">Email</label><br>
		<input type="text" name="email" placeholder="email" id="user1" required>
		<br>

		<label for="username">Phone</label><br>
		<input type="text" name="phone" placeholder="phone" id="user1" required>
		<br>

		<label for="password">Password</label><br>
		<input type="text" name="password" placeholder="password" id="user1" >
		<br><br>

		<input type="file" id="profile" name="image"><br>

	<button onclick="close1nav()" id="back"><i class="fa fa-arrow-left"></i></i></button>

		<input type="submit" name="submit" id="sub1" value="submit">
	</center>
	</form>
</div>



	</body>
	</html>