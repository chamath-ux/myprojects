
<?php
include("connection.php");

 $name =$_POST['name'];
 $lname =$_POST['lname'];

$sql="Insert into data(name,lname) values('$name','$lname')";
$result=mysqli_query($conn,$sql);
if(!$result){
	echo"not inserted";
	
}else{
	
	echo"succcess";
}

    
	

?>
  