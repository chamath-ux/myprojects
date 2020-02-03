<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  
			.input{
				
				border:2px solid;
				 border-radius: 25px;
				 text-align:30px;
				
			}
  </style>
  <?php
		include 'connection.php';
		
		
		if(isset($_POST['submit'])){
			
			$bussiness = $_POST['bussiness'];
			$shedual = $_POST['shedule'];
			$month = $_POST['month'];
			$acc = $_POST['acc'];
			$date = $_POST['date'];
			
		
			$chequno =$_POST['chequno'];
			$amount =$_POST['amount'];
			$place = $_POST['place'];
			
			$sql = "Insert into expence(username,bussiness,shedual,Month,Accrualexpences,Date,chequno,amount,place) values ('".$login_session."','".$bussiness."','".$shedual."','".$month."','".$acc."','".$date."','".$chequno."','".$amount."','".$place."')";
			$result =mysqli_query($conn,$sql);
			if(!$result){
				
				echo "not insert";
			}else{
				
				echo "ok";
			}
			
		}
  ?>
</head>
<body>

<div class="container">

  <!-- Button to Open the Modal -->
 
  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Expences</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
         <form name=form  action=#  method="post">
				<div class="form-group">
						<input type="text" class="form-control" id="bussiness" name="bussiness" placeholder="Bussiness name">
				</div>
				<div class="form-group">
						
						  <select class="form-control" id="shedule" name="shedule">
							<option value="Select month">shedule</option>
							<option value="Electricity">Electricity</option>
							
						  </select>
				</div>
				<div class="form-group">
						
						  <select class="form-control" id="place" name="place">
							<option value="place">Select place</option>
							<option value="GeneralIncome">General Income</option>
							<option value="Otherincome">Other Income</option>
							<option value="administrative">Administrative expences</option>
							<option value="distribution">Distribution Cost</option>
							<option value="finance">Finance Cost</option>
							<option value="Other">Other Cost</option>
							
						  </select>
				</div>
				<div class="form-group">
						
						  <select class="form-control" id="month" name="month">
							<option value="Select month">Select Month</option>
							<option value="April">April</option>
							<option value="May">May</option>
							<option value="June">June</option>
							<option value="July">July</option>
							<option value="September">September</option>
							<option value="Octomber">Octomber</option>
							<option value="November">November</option>
							<option value="December">December</option>
							<option value="January">January</option>
							<option value="February">February</option>
							<option value="March">March</option>
						  </select>
				</div>
				<div class="form-group">
						<input type="text" class="form-control" id="acc" name="acc" placeholder="Accrual Expences">
				</div>
				<div class="form-group">
						<input type="date" class="form-control" id="date" name="date">
				</div>
				<div class="form-group">
						<input type="text" class="form-control" id="chequno" name="chequno" placeholder="Chequ Number">
				</div>
				<div class="form-group">
						<input type="text" class="form-control" id="amount" name="amount" placeholder="Amount of payment">
				</div>
				
					  <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
		 </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>

</body>
</html>

                                                    