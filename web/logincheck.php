<?php
session_start();
include ('connection.php');
if(isset($_POST['login'])){
	
	
	$username=$_POST["username"];
	$password =$_POST["password"];
	
	$sql="SELECT * from login where username ='".$username."' and password='".$password."' and loginstates='1'";
	$result=mysqli_query($conn,$sql);
	
	if(!$result || mysqli_num_rows($result) <= 0)
	{
		
		header("Location:index.html");
	}elseif($username=='Admin'){
		$_SESSION['login_user'] = $username; // Initializing Session
		header("Location:admin.php");
		
	}else{
		$_SESSION['login_user'] = $username; // Initializing Session
		header("Location:dashboard.php");
		
	}
	
}else{
	
	echo"incorrect";
	
}

?>