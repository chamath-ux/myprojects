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
		$message = "password or username incorrect";
		echo "<script type='text/javascript'>alert('$message');
		window.location.href='login.php';
		</script>"; 
		
		//header("Location:login.php");
	}elseif($username=='Admin'){
		$_SESSION['login_user'] = $username; // Initializing Session
		header("Location:admin.php");
		
	}else{
		$_SESSION['login_user'] = $username; // Initializing Session
		header("Location:dashboard.php");
		echo"<?php $sql = 'insert into logintime(username,time) values('".$username."','".date("Y/m/d")."')';
					$result =mysql_query($conn,$sql);
					
		?>";
	}
	
}else{
	
	echo"incorrect";
	
}

?>