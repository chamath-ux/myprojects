<?php
 include 'connection.php';
if(isset($_POST['submit'])){
    
    $email =$_POST['Email'];
    $comment =$_POST['comment'];
    
    $sql="insert into comments(email,comment) Values('".$email."' ,'".$comment."')";
    $result= mysqli_query($conn,$sql);
    
    if(!$result){
        echo"not insert";
    }
    else{
       header("Location:contact.php"); 
    }
    
    
}
?>