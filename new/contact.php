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
    
     <link rel="stylesheet" href="styles/contact.css">
    <style>
          .jumbotron{
            
           background-image: url("images/jumbtron.jpg");
      
        }
    </style>
</head>
<body>
   
     
    <div class="container">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4"></div>
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
                <h1>ඔබගේ වටිනා අදහස් අපවෙත එවන්න </h1>
                <br>
                <?php include 'connection.php' ?> 
              <?php include 'form.php' ?>
                </div>
            </div>
            <div class="col-sm-4" id="col-sm-4">
                <h1>Contact Us</h1>
                <ul>
                    
                    <li><img src="images/address.png"> : නො 25/7, ඉසිපතනාරාම පාර, නාවින්න, මහරගම</li> 
                    <br>
                    <li><i class="fa fa-phone"> : 0773504684 </i></li>
                    <br>
                <li><img src="images/phone.png"> : 0112837627</li>
                    <br>
                <li><img src="images/email.png">: mahindag73@gmail.com</li>
                    <br>
                     <li><img src="images/facebook.png">: Damseth</li>
                </ul>
            </div>
        </div>
        <hr>
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