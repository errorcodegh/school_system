<?php
$connection = mysqli_connect("localhost","root","","schoolsystem");
$database = mysqli_select_db($connection,"schoolsystem");

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

	$sql = "SELECT * FROM studentlog WHERE username = '$username' AND password = '$password'";
	$data = mysqli_query($connection,$sql);
   $result = mysqli_num_rows($data);
   $row = mysqli_fetch_array($data);
   @$_SESSION["id"]=$row['id'];

   if($row > 0){
   	echo "<script>
     alert('Successfully Log In');
    document.location='openpage.php';
   	</script>";
   }

   else{
   	 
   	  $errormsg = "credentials wrong";
   }
}

?>


<!DOCTYPE html>
<html>
<head><title>MANAGEMENT SYSTEM FOR JUNIOR SCHOOL</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"></head>


	<body>
			<div id="studentlog">
				<button onclick="closenav()" id="back"><i class="fa fa-arrow-left"></i></button>
				<h2>Stu<span>dent</span></h2>
				<div><i class="fa fa-user-circle" id="icon" style="background-color: gold;"></i></div>
				<form name="loggingpage" METHOD="POST" action="studentlog.php">
					<h3 id="h1"><?php echo $errormsg; ?></h3>
					<label for="username">UserName</label><br>
						<input type="text" id="tt" name="username" placeholder="Name here" >
						<br>
						<label for="password">PassWord</label><br>
						<input type="text" id="tt" name="password" placeholder="Password here"><br>
						<input type="checkbox" id="but" onclick="check()"><b style="font-size: 1.1em;">&nbsp&nbspDont have an acount here!!!</b> <br>
						<input type="submit" id="sub" name="submiter" value="Submit">
					</form>
			</div>

			</body>
			</html>
