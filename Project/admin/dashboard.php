
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
   img{
      width: 220px;
      height:300px;
      padding: 5px;
      border-radius: 20px;
      border-style: solid;
      border-color: white;
      margin-bottom: 40px;
    }

    </style>
</head>
<body>
  <div class="row main-row fill">
    <div  class="col-sm-2 sidebar hidden-xs" style="background-color: #383839">
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
    

    <div class="col-sm-10 col-xs-12 main-content-area overflow-auto">
      <br><br>
    <div class="col-md-12">
    <div class="row"style="margin-left: 10px;">
      <div class="col-lg-3 col-md-3" style="border-right: solid lightgrey;">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Customer Satisfaction</h4>
            <img src="pie2.jpg" style="width: 100%; height: 100%;">92%</span>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3"style="border-right: solid lightgrey;">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Customers</h4>
            <img src="pie3.jpg" style="width: 100%; height: 100%;"><span class="percent">65%</span>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3"style="border-right: solid lightgrey;">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Vehicles</h4>
            <img src="pie4.jpg" style="width: 100%; height: 100%;"><span class="percent">56%</span>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-md-3"style="">
        <div class="panel panel-default">
          <div class="panel-body easypiechart-panel">
            <h4>Visitors</h4>
            <img src="pie5.jpg" style="width: 100%; height: 100%;"><span class="percent">27%</span>
          </div>
        </div>
      </div>
    </div>
  </div>
      <br><br>
      <div class="row">
                        <div class="col-md-4" style="margin-left: 30px;">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Tariff chart</h4>
                                    <p class="card-category">In Percentage</p>
                                </div>
                                <div class="card-body ">
                                    <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>
                                    
                                    <br>
                                    <div class="container" style=""><img src="pie1.jpg" style="width: 100%; height: 100%;"></div>
                                    <div class="legend">
                                        <i class="fa fa-circle" style="color: orange;"></i> Lower
                                        <i class="fa fa-circle" style="color: red;"></i> Higher
                                        <i class="fa fa-circle" style="color: blue;"></i> On location

                                    </div>
                                    <br>
                                    <div class="card-footer" style="background-color: white;">
                                    <div class="stats">
                                      <br>
                                        <i class="fa fa-history"></i> Updated 1 month ago
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7" style="margin-left: 20px;">
                            <div class="card ">
                                <div class="card-header ">
                                    <h4 class="card-title">Customer increase</h4>
                                    <p class="card-category">Over 2 years</p>
                                </div>
                                <div class="card-body ">
                                    
                                    <div class="container" style=""><img src="line1.jpg" style="width: 100%; height: 100%;"></div>
                                    <div class="legend">
                                        <i class="fa fa-circle" style="color: orange;"></i> 2017
                                        <i class="fa fa-circle"style="color: blue;"></i> 2018
                                        <i class="fa fa-circle"style="color: red;"></i> 2019
                                    </div>
                                </div>
                                <br>
                                <div class="card-footer" style="background-color: white;">
                                    <div class="stats">
                                        <i class="fa fa-history"></i> Updated 3 minutes ago

                                    </div>
                                </div>
                            </div>
                        </div>
      <p style="margin-left: 30px;">Dashboard</p>
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
