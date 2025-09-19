<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inventory Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head><style>
    
        form {
            background: linear-gradient(135deg, #3f8cd9, #4b6cb7, #672d91);
            color: #fff; /* Text color for the form */
            padding: 10px;
            border-radius: 8px;
            margin: 0 auto; /* Center the form */
            width: 80%; 
        }

label{color: white;}
        /* Add any additional styling here */

    </style>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/icon/logo.jpg" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="index.php" aria-expanded="true"><i class="ti-dashboard"></i>
				<span>Home Page</span></a>
                                
                            </li>
                            
                            <li class="active">
                                <a href="table.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Inventory</span></a>
                            </li>


				<li class="active">
                                <a href="user homepage.php" aria-expanded="true" target="_blank"><i class=""></i>
                                    <span>Go To User P.O.V?</span></a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->


        
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            
                        </div>
                    </div>
                    
                    <!-- profile info & task notification-->
                    <div class="col-md-6 col-sm-4 clearfix">
                        
                    </div>
                </div>
            </div>
      
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Item Records</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
               
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"> Hi! Admin<i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                
                               <a class="dropdown-item" href="../login.php">Log Out</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div>
            
     <h1 style="text-align:center">Burger Inventory</h1>
<br>

<body>

<form method="POST" class="form-inline" action="additem.php">

  <div class="form-group">
    <label for="name">Product Name</label>	&nbsp;	&nbsp;	&nbsp;
    <input type="text" class="form-control" name="product_name">
    
  </div>
  <div class="form-group">
    <label for="name">&nbsp;&nbsp;&nbsp;Price</label>	&nbsp;	&nbsp;	&nbsp;
    <input type="text" class="form-control" name="price">
  </div>

<br><br><br>
  <div class="form-group">
        <label for="name">&nbsp;&nbsp;Quantity</label>	&nbsp;	&nbsp;	&nbsp;
        <input type="number" name="quant" id="quant" min="1" max="">	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;
    </div>
   <button type="submit" class="btn btn-default" name="add">Add Burger Item</center></button>

</form> 
</body>



<form method="post" class="form_bttn" target="_blank" action="summary.php">
    <center>
        <button type="submit" class="summary_bttn" name="add">Summary</button>
    </center>
</form>

<!-- Your HTML table for displaying orders -->





<style>
.form_bttn{
		background: none;
		width:110px;
		border-radius: 50px;
	
		}


.summary_bttn {
		padding:10px;
		background: linear-gradient(135deg, #394240, #55676e, #7d8a8f, #a3aeb3, #cad5db);
		border-radius: 10px;
		}
</style>






















<center>
            <div class="main-content-inner">
                <div class="row">
                   
                    <!-- Contextual Classes start -->



		<!-- Contextual Classes for product  -->

                      <div class="col-lg-6 mt-5">
         <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Products</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-dark text-center">
                                    <thead class="text-uppercase">
                                        <tr class="table-active">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Total</th> <!-- New column header for total -->
                                            <th scope="col">Action</th>
                                        </tr>
                                            </thead>
                                    <tbody>

                                        <?php 
                                        $conn = new mysqli("localhost","root","","inventorymanagement");
                                        $sql = "SELECT * FROM product";
                                        $result = $conn->query($sql);
                                        $count = 0;

                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $count++;
                                                $total = $row["price"] * $row["quantity"];
                                        ?>
                                                <tr>
                                                    <th><?php echo $count ?></th>
                                                    <th><?php echo $row["product_name"] ?></th>
                                                    <th><?php echo $row["price"] ?></th>
                                                    <th><?php echo $row["quantity"] ?></th>
                                                    <th><?php echo $total ?></th> <!-- Display the total -->
                                                    <th>
                                                        <a href="edit.php?id=<?php echo $row["product_id"] ?>">Edit</a><br>
                                                        <a href="delete.php?id=<?php echo $row["product_id"] ?>">Delete</a>
                                                    </th>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>

					 

                                    </tbody>
                	       </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

 							<!-- Contextual Classes for user  -->

<div class="col-lg-6 mt-5">
         <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">User Accounts From My Branches</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-dark text-center">
                                    <thead class="text-uppercase">
                                        <tr class="table-active">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Password</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                            </thead>
                                    <tbody>

                                        <?php 
				
                                        $conn = new mysqli("localhost","root","","inventorymanagement");
                                        $sql = "SELECT * FROM user";
                                        $result = $conn->query($sql);
                                       
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                     
                                       
                                        ?>
                                                <tr>
                                                    
                                                    <th><?php echo $row["id"] ?></th>
                                                    <th><?php echo $row["name"] ?></th>
                                                    <th><?php echo $row["email"] ?></th>
                                                    <th><?php echo $row["pass"] ?></th>
                                                    <th>
                                                       <!-- <a href="edit user.php?id=<?php echo $row["id"] ?>">Edit</a> -->
                                                        <a href="delete user.php?id=<?php echo $row["id"] ?>">Delete</a>
                                                    </th>
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>

					 

                                    </tbody>
                	       </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




            <!-- Contextual Classes end -->
        </div>
    </div>

                    <!-- Contextual Classes end -->
                   



<div class="col-lg-6 mt-5">
         <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Orders From My Branches</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-dark text-center">
                                    <thead class="text-uppercase">
                                        <tr class="table-active">
                                            <th scope="col">ID</th>
                                            <th scope="col">Product Name</th>
                                            <th scope="col">quantity</th>
                                            <th scope="col">Date Ordered</th>
					    <th scope="col">Status</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                            </thead>
                                    <tbody>

                                        <?php 
				
                                        $conn = new mysqli("localhost","root","","inventorymanagement");
                                        $sql = "SELECT * FROM orders";
                                        $result = $conn->query($sql);
                                       
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                     
                                       
                                        ?>
                                                <tr>
                                                    <th><?php echo $row["id"] ?></th>
                                                    <th><?php echo $row["product_name"] ?></th>
                                                    <th><?php echo $row["quantity"] ?></th>
                                                    <th><?php echo $row["order_date"] ?></th>
						    <th><?php echo $row["status"] ?></th>
                                                    <th>
                                                      <a href="edit user.php?id=<?php echo $row["id"] ?>">Update Order</a>
                                                   <!--   <a href="delete user1.php?id=<?php echo $row["id"] ?>">Delete</a><br> -->
						<!-- <a href="delete user1.php?id=<?php echo $row["id"] ?>">Cancel Order</a> -->
                                                    </th>
							
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>

					 

                                    </tbody>
                	       </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>















        <!-- main content area end -->
     
<html>
<head>
	<title>Add Item</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>

</html>
    






    </div>
    <!-- page container area end -->
    <!-- offset area start -->
   
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
