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
    <title>User Inventory</title>
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
</head>

<style>
    body {
        background: linear-gradient(to right, #6c757d, #343a40); /* Unique gradient background */
        color: #fff;
    }

    .form {
  background: linear-gradient(135deg, #3f8cd9, #4b6cb7, #672d91);
        color: #fff;
        padding: 20px;
        border-radius: 8px;
        margin: 0 auto;
        width: 80%;
        margin-top: 50px;
    }

    .cards {
        background-color: white; /* Unique dark purple background for the cards */
        color: #fff;
        padding: 20px;
        border-radius: 8px;
        margin: 50px 100px;
        width: 180%;
    }

    .a {
        background-color: orange; /* Unique dark green color for links */
        color: #0000cc; /* Unique dark blue color for link text */
        padding: 8px;
        border-radius: 10px;
        margin: 0 auto;
        display: inline-block;
        margin-right: 10px;
        margin-top: 20px;
        text-decoration: none;
    }

.title {
 		background: linear-gradient(135deg, #3f8cd9, #4b6cb7, #672d91);
		padding:20px;

	}
 .page2{
            font-size: 3em;
            margin-bottom: 20px;
            color: #ff75a0;

		
        }


</style>

<body>

    <!-- main content area start -->
    
        <!-- header area start -->
        
            <d
                <!-- nav and search button -->
                <div class="">
                    <!-- profile info & task notification-->
                    <div class="">
                    </div>
                </div>
            </div>
        </div>
        <!-- header area end -->
        <!-- page title area start -->
        <div class="title">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumbs-area clearfix">
                    </div>

                </div>
                <div class="col-sm-6 clearfix">
		<a class="a" href="Burger Ads.php">Burger Ads</a>
                    <a class="a" href="user homepage.php">Home Page</a>
                    <a class="a" href="Watch Anime.php">Watch Anime</a>
                    <a class="a" href="Types Of Burgers.php">Types Of Burgers</a>
                    

                    <div class="user-profile pull-right">
                        <a class="dropdown-item" href="../user log in and sign up/login.php">Log Out</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- page title area end -->
        <div>
<body>
            <h1 class="page2"> Burger Products </h1>
            <div class="">
                <div class="">
                    <div class="form">
                        <!-- Contextual Classes start -->
                        <div class="col-lg-6 mt-5">
                            <div class="cards">
                                <div class="">
                                    <center>
                                        <h4 class="header-title">Products</h4>
                                        <div class="single-table">
    <div class="">
        <table class="table text-dark text-center">
            <thead class="text-uppercase">
                <tr class="table-active">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Total</th>
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
                            <th><?php echo $row["price"]  ?></th>
                            <th><?php echo $row["quantity"]  ?></th>
                            <th><?php echo $total ?></th>
			 <th>
       <button class="btn btn-primary orderNowBtn" data-product-id="<?php echo $row['product_id']; ?>">Delivered Now</button>
    
			</tr> 
			

                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<a href="order_summary.php">View Order Summary</a>
                                    </center>

                                </div>
                            </div>
                        </div>
                        <div>

<!--	<center><a class="a" href="edit user.php">Deliver Now</a></center> -->
                        </div>

                    </div>
                    <!-- Contextual Classes end -->
                    <!-- main content area end -->
                    <html>

                    <head>
                        <title>Add Item</title>
                        <link rel="stylesheet" type="text/css" href="style.css">
                        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
                    </head>

                    </html>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
			<!-- Contextual Classes end -->

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
$(document).ready(function () {
    $(".orderNowBtn").click(function () {
        // Retrieve product ID from data attribute
        var productId = $(this).data('product-id');

        // Prompt the user for the quantity
        var quantity = prompt('Enter the quantity you want to order:');

        // Check if the user entered a valid quantity
        if (quantity !== null && !isNaN(quantity) && quantity > 0) {
            // Retrieve user ID from the session
            var userId = <?php echo isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0; ?>;

            // Simulate an order by sending a request to the server
            $.ajax({
                url: 'process_order.php',
                type: 'POST',
                data: { action: 'order_now', productId: productId, quantity: quantity, userId: userId },
                success: function (response) {
                    // Handle the response from the server (if any)
                    console.log('Response:', response);
                    window.location.href = "usertable.php";
                    alert('Order placed successfully!');
                },
                error: function () {
                    alert('Error processing the order.');
                }
            });
        } else {
            alert('Invalid quantity. Please enter a valid number greater than 0.');
        }
    });
});
</script>



