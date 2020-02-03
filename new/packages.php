<!DOCTYPE html>
<html lang="en">
<head>
<title>පිරිත්මන්ඩප්ප</title>
    <link rel="shortcut icon" type="image/png" href="images/buddhism.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
     <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/cardpack.css">
    <style>
       .jumbotron{
            
           background-image: url(images/jumbtron.jpg);
         
        }
    </style>
    <script>
    $(document).ready(function(){
        
 $(".box1").hide();
  $("#h1").hover(function(){
      
    $(".box1").show();
  });
  
             
  });
        
  

        
    </script>
</head>
<body>
   <?php include 'model.php';?>
    <?php include 'model1.php';?>
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"><h3> දම්සෙත්</h3></div>
        </div>
         <hr>
       <div class="row">
         <?php include 'nav.php';?>
        <?php include 'crousel.php';?>
        </div>
        <div class="row"></div>
        <hr>
        <div class="row">
          <?php include 'cardpac.php'; ?>
        </div>
        <hr>
        <div class="row">
       
        </div>
         <div class="row">
       
        </div>
            <hr>
    </div>
     <div class="footer">
   <p>copy write of Pirithmandappa.com</p>
         
    </div>
</body>
   
</html>