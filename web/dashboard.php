<html>
	<head>
	<title>Dashboard </title>
  <link rel="shortcut icon" href="https://YourFaviconLinkHere.ico" type="image/x-icon"/>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
			<?php
			include('session.php');
			if(!isset($_SESSION['login_user'])){
			header("location: index.html"); // Redirecting To Home Page
			}
			?>
			<style>
					title{
						
						color:blue;
					}
			</style>
			<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>
			
	</head>
	<body data-toggle="tooltip" data-placement="right" title="<?php echo $login_session; ?> Welcome to Accounts ">
	<?php 
	 include('nav3.php');
	
	?>
			<div class="container-main" >		
						<div class="row">
								<div class="col-sm-4">
										
								</div>
								<div class="col-sm-4">

											

								</div>
						</div>
						
			</div>
			<a href="logout.php">Log Out</a>
	</body>
</html>