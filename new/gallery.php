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
     
    <style>
             div.gallery {
              margin: 5px;
              
              float: left;
              width: 180px;
            }

          

            div.gallery img {
              width: 100%;
              height: auto;
            }

            div.desc {
              padding: 15px;
              text-align: center;
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
            <div class="col-sm-4"><h3> Gallery</h3></div>
        </div>
         <hr>
       <div class="row">
         <?php include 'nav.php';?>
        
        </div>
        <div class="row"></div>
        <hr>
        <div class="row">
                                                        <div class='box'>

        <?php 
    include 'connection.php';

 $sql = "SELECT image FROM images";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                                echo "<div class='gallery'>";
                                                      echo "<a target='_blank' href='img_5terre.jpg'>";
                                                       echo '<img  class="rounded float-left"  src ="data:image/jpeg;base64,'.base64_encode( $row['image'] ).'"/>';
                                                      
                                                      echo "<div class='desc'>Add a description of the image here</div>
                                                    </div>";
                                           
                                                    
                                        
                                      
                                        }
                                    } else {
                                        echo "<div class='alert alert-success'>
                                                    thank you for paiten Coming soon with photos
                                                </div>";
                                    }

    ?>
                                                            </div>
        </div>
    </div>
     <div class="footer">
   <p>copy write of Pirithmandappa.com</p>
         
    </div>
</body>
   
</html>