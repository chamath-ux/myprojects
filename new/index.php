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
       .jumbotron{
            
           background-image: url(images/jumbtron.jpg);
     
         
        }
    </style>
    <script>
    $(document).ready(function(){
    $('exampleModalLabel2').show();
         $(".box1").hide();
          $("#h1").hover(function(){

            $(".box1").show();
          });   
  
             
  });
        
  

        
    </script>
</head>
<body>
   <?php include 'model.php';?>
     <?php include 'popupmodel.php';?>
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
            <div class="col-sm-8">
            <div class="box">
                <div class="row">
                <div class="col-sm-4">
                    <img src="images/cardimg.JPG">
                    </div>
                    <div class="col-sm-8">
                    <h1>Packages</h1>
                        <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
                        </p>
                        <a href="packages.php"> <button type="button" class="btn btn-primary">More details</button></a>
                    </div>
                </div>
            
                </div>
            </div>
            <div class="col-sm-4" id="col-sm-4">
               <h1>About</h1>
                <p>කලශුරි S.A.D පෙරේරා මහතාණන් වසර 35 කට අධික කාලයක් මුළුල්ලේ නිර්මාණය කරන ලද කැටයම් සහිත මෙම පිරිත් මණ්ඩපය ඔහුගේ ආශීර්වාදය සහ උපදේශකත්වය මත පුතණුවන් විසින් නිර්මාණය කරනු ලබයි....  
                    <br><br>
                <a href="about.php">වැඩි විස්තර සදහා </a>
                </p>
            </div>
        </div>
        <hr>
        <div class="row">
        <div class="col-sm-8">
          <?php include 'cro.php'; ?>
            </div>
            <div class="col-sm-4">
            <h1>services</h1>
                <ul>
                    <a href = "" data-toggle="modal" data-target="#exampleModal"><li>මණ්ඩපය සදහා</li></a>
                    <a href ="" data-toggle="modal" data-target="#exampleModal1"><li>අමතර සේවාවන් </li></a>
                    
                </ul>
                <h1 id="h1">Comments</h1>
                        <div class="box1">
               
                                 
                                <?php include 'connection.php';


                                $sql = "SELECT email,comment FROM comments";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while($row = $result->fetch_assoc()) {
                                            echo "<table>";
                                                echo "<tr>";
                                                echo "<td><img src='images/user.png'></td>";
                                            echo "<td><h1>".$row['email']."</h1></td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                            echo "<td></td>";
                                            echo "<td>".$row['comment']."</td>";
                                            echo "</tr>";
                                            echo "</table>";
                                          
                                            
                                           
                                        }
                                    } else {
                                        echo "0 results";
                                    }
                                ?>
                        </div>
            </div>
        </div>
         <div class="row">
        <div class="col-sm-8">
         
            </div>
            <div class="col-sm-4">
          
            </div>
        </div>
            <hr>
    </div>
     <div class="footer">
   <p>copy write of Pirithmandappa.com</p>
         
    </div>
</body>
   
</html>