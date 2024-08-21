<?php
$connection = mysqli_connect("localhost","root","","adminlog");
$database = mysqli_select_db($connection,"adminlog");

$username = $password = $errormsg = $usernamerr = $passwordrr = "";

if(isset($_POST["submiter"])) {
	if(!empty($_POST["username"])){
		$username = $_POST["username"];
	}
	else{
		$usernamerr = "error";
	}

	if(!empty($_POST["password"])){
		$password = $_POST["password"];
	}
	else{
		$passwordrr = "error";
	}

	$sql = "SELECT * FROM admin_table WHERE username = '$username' AND password = '$password'";
	 $data = mysqli_query($connection,$sql);
   $result = mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
   @$_SESSION["id"]=$row['id'];

   if($row > 0){
   	echo "<script>
   	alert('successfully log in');
   	document.location='openpage.php';
   	</script>";
   }

   else{
   	 $errormsg = "credentials wrong!!";
   }
}

?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="mainpage.css">
</head>
<body>

<div id="adminlog">
				<h2>Ad<span>min</span></h2>
				<div><i class="fa fa-user-circle" id="icon" style="background-color: white;"></i></div>
				<form method="POST" action="mainpage.php">
					<h3 id="h1"><?php echo $errormsg; ?></h3>
					<label for="username">UserName</label><br>
						<input type="text" id="tt" name="username" placeholder="Name here" value="<?php echo $username; ?>"><br>
						<label for="Password">PassWord</label><br>
						<input type="text" id="tt" name="password" placeholder="Password here" value="<?php echo $password; ?>"><br>
						<input type="checkbox" id="but" onclick="openav()"><b style="font-size: 1.1em;">&nbsp&nbspLog-In As Student</b><br>
						<input type="submit" id="sub" name="submiter" value="Submit">
					</form>
			</div>


	</body>
	</html>