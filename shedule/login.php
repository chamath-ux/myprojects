<!DOCTYPE html>
<html lang="en">
<head>
  <title>Accounts </title>
  <link rel="shortcut icon" href="https://YourFaviconLinkHere.ico" type="image/x-icon"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type = "text/javascript" src="C:\wamp64\www\javascript\jquery\custom.js" >

      </script>
	  <link rel="stylesheet" href="style.css">
        <script>
            $(function() {
 
                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#remember').attr('checked', 'checked');
                    $('#username').val(localStorage.username);
                    $('#password').val(localStorage.password);
                } else {
                    $('#remember').removeAttr('checked');
                    $('#username').val('');
                    $('#password').val('');
                }
 
                $('#remember').click(function() {
 
                    if ($('#remember').is(':checked')) {
                        // save username and password
                        localStorage.username = $('#username').val();
                        localStorage.password = $('#password').val();
                        localStorage.chkbx = $('#remember').val();
                    } else {
                        localStorage.username = '';
                        localStorage.password = '';
                        localStorage.chkbx = '';
                    }
                });
				
            });
			
 
        </script>
<style>
			
  </style>
  <?php
session_start();

?>
  
</head>
<body>

<div class="container">
<div class="row"></div>
 <div class="row">
 <div class="col-sm-4"></div>
	<div class="col-sm-4">

  <form action="logincheck.php" method="post">
  <img src="images/male.png" class="center"><br>
  
  <div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text"><img src="images/user.png" class="img"></span>
      </div>
       <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
    </div>
	<div class="input-group mb-3 input-group-sm">
      <div class="input-group-prepend">
        <span class="input-group-text"><img src="images/pass.png" class="img"></span>
      </div>
       <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
	 <input class="form-check-input" type="checkbox" name="remember" id="remember"> Remember me
     
  <a href="forget.php" class="link">Forget Password?</a>
    <button type="submit" class="btn btn-primary"  name="login" id="login" >Log in</button>
	<p>Don't have an account?<a href="forget.php" class="link">Sing up</a></p>
  </form>
       
	</div>
</div>
</div>
<div class="footer">
Create by Accounts @ Srilanka com
</div>
</body>
</html>
