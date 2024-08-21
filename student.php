<?php
$connection = mysqli_connect("localhost","root","","schoolsystem");
$database = mysqli_select_db($connection,"schoolsystem");

$username = $password = $errormsg = $passwordrr = $usernamerr = "";

if(isset($_POST["submit"])){
	if(!empty($_POST["username"])){
		$username = $_POST["username"];
	}
else {
	$username = "error";
}

if(!empty($_POST["password"])){
		$password = $_POST["password"];
	}
else {
	$password = "error";
}

$sql = "SELECT * FROM studentlog WHERE username = '$username' AND '$password'";
$conn =mysqli_query($connection,$sql);
$data =mysqli_num_rows($conn);
$row =mysqli_fetch_array($conn);
@$_SESSION["id"] =$row['id'];
 
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
<head><link rel="stylesheet" href="mainpage.css"></head>
<body>
	<div id="studentlog">
				<h2>stu<span>dent</span></h2>
				<div><i class="fa fa-user-circle" id="icon" style="background-color: white;"></i></div>
				<span onclick="closenav()" id="back"><i class="fa fa-arrow-left"></i></span>
	<form method="POST" action="mainpage.php">
		<h2><?php echo $errormsg; ?></h2>
		<label for="username">UserName</label><br>
		<input type="text" id="tt" name="username" placeholder="enter name" value="<?php echo $username; ?>">
		<br>
		
		<label for="password">PassWord</label><br>
		<input type="text" id="tt" name="password" placeholder="password here" value="<?php echo $password; ?>">
		<br>

		<input type="checkbox" id="but" onclick="check()"><b style="font-size: 1.1em;">&nbsp&nbspCreate Account As Student</b><br>

		<input type="submit" id="sub1" name="submit" value="submit">
 

</form>
</div>

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