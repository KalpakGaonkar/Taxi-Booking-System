
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/6cbbf68e59.js" crossorigin="anonymous"></script>

      <style>  
    html,body {
      height:100%;
      background-color:#000;
    }
    .header-anchor{ 
  text-decoration: none;
  font-family: verdana; 
  color: white; 
  padding-left:15px;
}
.sidebar a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  color: white;
}

.sidebar a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}
.active {
  background-color: #383839;
  color: white;
}
.dropdown-container {
  display: none;
  background-color: #383839;
  padding-left: 8px;
}

.modal {
  display:none;
    position: fixed;
    
    left: 18%;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;

    background-color: white;
}

    .container {
      height:100%;
    }
    .main-row {
      margin-left:0;
      margin-right:0;
    }
    .fill {
      width:100%;
      height:100%;
      min-height:100%;
      padding:0px;
    }
    .sidebar
    {
      background: #F0F0F0;
      height:100%;
      min-height:100%;
    }
    .main-content-area
    {
      background: white;
      width: 100%;
      height:100%;
      min-height:100%;
      
    }

            table{
                border-collapse: collapse;
                width:100%;
                color:#588c7e;
                font-family:verdana;
                font-size:20px;
                text-align:left;
            }
            th
            {
                background-color:#588c7e;
                color:white;
            }
    
    </style>
</head>
<body>
  <div class="row main-row fill">
    <div class="col-sm-2 sidebar hidden-xs" style="background-color: #383839">
      <br><a class="nav-link text-white header-anchor h4" href="../admin/dashboard.php"><i class="fa fa-tachometer-alt"></i>&nbsp;&nbsp;Dashboard</a><br>
      <span class="dropdown-btn"><i class="fas fa-user"></i>&nbsp;&nbsp;Driver
      <i class="fas fa-chevron-right" style="align-items: right;"></i>
      </span>
      <div class="dropdown-container"><br>
        <a href="../admin/insert1.php"><i class="far fa-plus-square"></i>&nbsp;&nbsp;Add Driver</a><br>
        <a href="../admin/update1.php"><i class="far fa-edit"></i>&nbsp;&nbsp;Update Details</a><br>
        <a href="../admin/delete1.php"><i class="far fa-trash-alt"></i>&nbsp;&nbsp;Delete</a><br>
        <a href="../admin/view1.php"><i class="fas fa-laptop"></i>&nbsp;&nbsp;View</a><br>
      </div><br>
      <span class="dropdown-btn"><i class="fas fa-car"></i>&nbsp;&nbsp;Vehicle
      <i class="fas fa-chevron-right"></i>
      </span>
      <div class="dropdown-container"><br>
        <a href="../admin/insert2.php"><i class="far fa-plus-square"></i>&nbsp;&nbsp;Add Vehicle</a><br>
        <a href="../admin/delete2.php"><i class="far fa-trash-alt"></i>&nbsp;&nbsp;Delete Vehicle</a><br>
        <a href="../admin/view2.php"><i class="fas fa-laptop"></i>&nbsp;&nbsp;View</a><br>
      </div><br>
        <a id="submit-btn1" class="nav-link text-white header-anchor" href="../admin/admin_login.php"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;Logout</a>
      </div>

    <div class="col-sm-10 col-xs-12 main-content-area">
        <br>
         <form name="insForm" action="../phpFiles/insert.php" method="post" style="margin-left: 20px;">
        <div class="form-group">
          <label for="text">Driver ID:</label>
          <input pattern="[0-9]+" required type="text" class="form-control" id="driver_id" placeholder="Enter ID" name="driver_id" style="width: 50%;">
        </div>
        <div class="form-group">
          <label for="pwd">First Name:</label>
          <input pattern="[A-Za-z]{1,15}" required="" type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" style="width: 50%;">
        </div>
       <div class="form-group">
          <label for="pwd">Last Name:</label>
          <input pattern="[A-Za-z]{1,15}" required="" type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname" style="width: 50%;">
        </div>
        <div class="form-group">
          <label for="pwd">Username:</label>
          <input pattern="[a-z]{1,15}" required="" type="text" class="form-control" id="driver_uname" placeholder="Enter Username" name="driver_uname" style="width: 50%;">
        </div>
        <div class="form-group">
          <label for="pwd">Assign Location:</label>
          <input pattern="[0-9]+" required="" type="text" class="form-control" id="driver_pass" placeholder="Enter Password" name="driver_pass" style="width: 50%;">
        </div>
        <div class="form-group">
          <label for="pwd">Contact No:</label>
          <input pattern="[0-9]+" required="" type="text" class="form-control" id="contact" placeholder="Enter Contact No." name="contact" style="width: 50%;">
        </div>
        
        <button  name="ins1" type="submit" class="btn btn-primary" onclick="">Submit</button><br>
        <div hidden="true" class="alert alert-success" id="result">
          
      </div>
      </form> 
      
      </div>
    </div>
  </div>


<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>




</body>
</html>
