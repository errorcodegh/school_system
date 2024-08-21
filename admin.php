<?php
$connection = mysqli_connect("localhost","root","","system_admin");
$database = mysqli_select_db($connection,"system_admin");

@$id=$_SESSION['id'];
$sql="SELECT * FROM admintable WHERE id='$id'";
$data=mysqli_query($connection,$sql);
$row=mysqli_fetch_array($data);

?>