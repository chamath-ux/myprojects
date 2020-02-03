<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <style>
  #table{
	  width:40%;
	  float:left;
	  margin-left:40px;
	  border:2px solid;
	  
  }
  </style>
  

	  
</head>
<body>

<div class="container">
<p id="alert" style="display:none;" class ="alert alert-success text-center"><i class="glyphicon glyphicon-ok"></i><span id="show"></span></p> 
<p id="alert1" style="display:none;" class ="alert alert-danger text-center"><i class="glyphicon glyphicon-ok"></i><span id="show1"></span></p> 
  <h2>Stacked form</h2>
  <form method="post" name="form" id="form">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="lname">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="button"  id="submit" class="btn btn-primary">Submit</button>
	 <button type="button"  id="edit" class="btn btn-primary">Edit</button>
  </form>
</div>


<div><?php include "table.php";?></div>

<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	
	 <script type="text/javascript">
	 $(document).ready(function(){
		
   
			$("#edit").prop("disabled", true);
			$("#submit").prop("disabled", true);
			$("#name").keypress(function(){
				$("#submit").prop("disabled", false);
				
				
			});
		
	
  $(":button").click(function() {

		      var name =$("#name").val();
var lname =$("#lname").val();       
		if(name == ""){
			
			$("#alert").hide();
			 $("#submit").css("background-color", "red");
			
						 $("#submit").text("warning");
						 $("#name").css("border-color" , "red");
		}
				
				//alert("name:"+name+"</br>Lastname:"+lname);
            else{    $.ajax({
                    type: "POST",
                    data:{ 
							name:name,
							lname:lname
					},
					url: "insert.php",
                    success: function(result) {
						  $("#alert1").hide();
						 $("#alert").show();
						 $("#show").html(result);
						 $("#submit").css("background-color", "green");
						 $("#submit").text("Success");
						  $("#submit").css("border-color", "green");
						  $("#edit").prop("disabled", false);
						   $("#name").css("border-color" , "green");
						  setTimeout(function(){
							    $("#alert").hide();
							  
						  },2000);
						  
						   location.reload(true);
						 
						 
                    },
                });
				




}
 

                   

     



});
	 });



	 
	 </script>
</body>
</html>