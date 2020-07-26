<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style1.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body style="">


<br><br>
<div class="modal-body row" style="align-self: center;">
  	<div class="col-md-6" style="align-self: center; margin-left: 350px; margin-top: 100px; border: solid; border-color: lightgrey; border-radius: 10px;">
		<div class="container">
		  <br>
		  <form id="RegForm" name="RegForm" method="post" action="authen_login.php">
		    <div class="form-group">
		      <label for="text">Username:</label>
		      <input required="" type="text" class="form-control" id="user_id" placeholder="Enter Username" name="user_id">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input required="" type="password" class="form-control" id="user_pass" placeholder="Enter password" name="user_pass">
		    </div>
		    
		    <button type="submit" class="btn btn-primary" onclick="">Submit</button>
        <br><br>
		  </form>
		</div>
	</div>
</div>



</body>
</html>


