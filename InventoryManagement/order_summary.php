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

    <!-- amchart css -->
    <!-- others css -->

    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">

    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<style>
    body {
        background: linear-gradient(135deg, #1e661e, #0f3b0f);
        color: #fff;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    form {
        background: linear-gradient(135deg, #349e4a, #2a7e38, #1e661e);
        color: #fff;
        padding: 10px;
        border-radius: 8px;
        margin: 0 auto;
        width: 80%;
    }

    label {
        color: white;
    }

    .card {
        background-color: #1e661e;
        color: #fff;
        border: 1px solid #349e4a;
        border-radius: 10px;
        padding: 20px;
        margin-top: 20px;
    }

    .table-active th {
        background-color: #2a7e38;
        color: #fff;
    }

    .table tbody tr:hover {
        background-color: #2a7e38;
    }

    .table-responsive {
        background-color: #349e4a;
        color: #fff;
        border-radius: 10px;
        padding: 15px;
    }

    .table-responsive table {
        border: 1px solid #fff;
    }

    .table-responsive th,
    .table-responsive td {
        border: 1px solid #fff;
        padding: 10px;
    }

    a {
        color: #349e4a;
    }
</style>
<center>
<div class="col-lg-6 mt-5">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title" style="color: white">Orders Updates</h4>
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
                                        
                                                     
                                                   <!--   <a href="delete user1.php?id=<?php echo $row["id"] ?>">Delete</a><br> -->
						<!-- <a href="delete user1.php?id=<?php echo $row["id"] ?>">Cancel Order</a> -->
                                             
							
                                                </tr>
                                        <?php
                                            }
                                        }
                                        ?>

					 

                                    </tbody>
                	       </table>
                            </div>
                        </div>
<a style="color: white" href="usertable.php">Go Back</a>
                  </center>
        </div>
    </div>
</div>

<script>
    function cancelOrder(orderId) {
        // Add an AJAX request to update the order status to 'Cancelled' in the database
        // You'll need to create a new PHP script to handle the cancellation and update the database
        // Example: updateOrderStatus.php

        // For simplicity, I'll use a confirm dialog before canceling the order
        var confirmCancel = confirm("Are you sure you want to cancel this order?");
        if (confirmCancel) {
            // Perform the cancellation action
            // Example: Call updateOrderStatus.php with orderId as a parameter
            // $.post("updateOrderStatus.php", { orderId: orderId, status: "Cancelled" }, function(response) {
            //     // Handle the response, e.g., refresh the page or update the UI
            // });
            alert("Order Cancelled!");
        }
    }
</script>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function cancelOrder(orderId) {
        // For simplicity, I'll use a confirm dialog before canceling the order
        var confirmCancel = confirm("Are you sure you want to cancel this order?");
        if (confirmCancel) {
            // Perform the cancellation action
            // Call updateOrderStatus.php with orderId as a parameter
            $.ajax({
                url: 'updateOrderStatus.php',
                type: 'POST',
                data: { orderId: orderId, status: "Cancelled" },
                success: function(response) {
                    // Handle the response from the server (if any)
                    console.log('Response:', response);
                    alert("Order Cancelled!");
                    // Redirect to the order summary page after cancellation
                    window.location.href = "order_summary.php";
                },
                error: function() {
                    // Handle AJAX error here
                    alert("Error cancelling order. Please try again.");
                }
            });
        }
    }
</script>


