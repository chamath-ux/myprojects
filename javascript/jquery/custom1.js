$(document).ready(function(){
	
  $(":button").click(function() {
               var name =$("#name").val();
var lname =$("#lname").val();

				//alert("name:"+name+"</br>Lastname:"+lname);
                $.ajax({
                    type: "POST",
                    data:{ 
							name:name,
							lname:lname
					},
					url: "insert.php",
                    success: function(result) {
						 
						 $("#alert").show();
						 $("#show").html(result);
                    },
                });


            });



});
<form method="post"   name="form" id="form">
name:<input type="text" name="name" id="name" placeholder="Enter your name"><br>
Last name:<input type="text" name="lname" id="lname" placeholder="Enter your lastname">
<input type="button" name="submit" id="submit" value="Save">

</form>