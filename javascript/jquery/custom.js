$(document).ready(function() {

   $("div").click(function() {
      alert("nice script" +this.id);
	  	 
   });
});
$(document).ready(function() {

   $("h1").click(function() {
      alert("done and go");
	  alert(this.id);
   });
});

$(document).ready(function() {

   $(":button").click(function() {
     $("div").show();
	 
   });
});
$(document).ready(function() {

  
   $(":button").css("background-color", "yellow");
    $(":button").css("border-color", "yellow");
});


$(document).ready(function() {

   $(":button").mouseenter(function() {
      $(this).css("background-color", "red");
    $("#total").val(this.id);
	$("#total").css("background-color", "red");
	  //$(this).css("background-color", "red");
	  //$("#total").val("you selected thebutton");
   });
});

$(document).ready(function() {

   $(":button").mouseout(function() {
     $(this).css("background-color", "yellow");
	  $("#total").val("");
	  $("#total").css("background-color", "");
	  //$(this).css("background-color", "yellow");
	   //$("#total").val("you unselected the button");
   });
});
$(document).ready(function() {

   $("div").hover(function() {
   $(this).css("background-color", "red");
    $("#total").val(this.id);
	$("#total").css("background-color", "red");
  
  }
   ,function(){
	    $(this).css("background-color", "yellow");
	  $("#total").val("");
	   $("#total").css("background-color", "");
   });
});
$(document).ready(function() {

   $("#login").hover(function() {
   $(this).css("background-color", "red");
    
  
  }
   ,function(){
	    $(this).css("background-color", "yellow");
	 
   });
});

$(document).ready(function() {
$("div").hide();
   
});


$(document).ready(function() {
$("#button").click(function(){
	
	var name =$("#name").val();
	var lname =$("#lname").val();
	
	$.ajax ({
		
			url:'insert.php',
			method:'POST',
			data:{
				
				name:name,
				lname:lname
				
			},success:function(data){
				
				alert("success");
			}
			
		
	});
	
	
});
});

$(document).ready(function(){
	$("#button1").click(function(){
		
		$("img").attr("src", "images/accounts1.jpg");
		$(this).attr("src", "images/wed.jpg");
		
	});
	
	
});