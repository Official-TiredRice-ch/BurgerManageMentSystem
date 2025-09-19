<?php
// summary.php

// Start the session
session_start();

date_default_timezone_set('Asia/Manila');

// Include functions or connect to the database if necessary

// Check if the summary button is clicked
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add"])) {
    // Retrieve and display summary information

    // Include your database connection or use your existing connection
    $conn = new mysqli("localhost", "root", "", "inventorymanagement");

    // Fetch orders data
    $sql = "SELECT * FROM orders";
    $result = $conn->query($sql);

    // Store orders data in an array for later use
    $ordersData = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ordersData[] = $row;
        }
    }

    // Get the first and last date from the orders
    $firstOrderDate = !empty($ordersData) ? $ordersData[0]['order_date'] : '';
    $lastOrderDate = !empty($ordersData) ? end($ordersData)['order_date'] : '';

    // Close the database connection
    $conn->close();

    // Record the date and time when the summary button is clicked
    $summaryDateTime = date("Y-m-d H:i:s");
}

// Function to calculate total orders
function calculateTotalOrders($ordersData)
{
    $totalOrders = 0;
    foreach ($ordersData as $order) {
        $totalOrders += $order["quantity"];
    }
    return $totalOrders;
}

function calculateStatusTotals($ordersData)
{
    $statusTotals = array(
        'delivered' => 0,
        'cancelled' => 0,
        'pending' => 0,
        'currently ordering' => 0
       
    );

    foreach ($ordersData as $order) {
        $status = strtolower($order["status"]);
        if (array_key_exists($status, $statusTotals)) {
            $statusTotals[$status] += $order["quantity"];
        } else {
            // Handle unknown status values if needed
        }
    }

    return $statusTotals;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["goBack"])) {
    // Handle form submission or redirect as needed
    header("Location: table.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <!-- Add your CSS styles if needed -->
    <style>
        body {
            font-family: 'BatmanForeverAlternate', sans-serif;
            background-color: #1e1e1e;
            margin: 0;
            padding: 0;
            color: #fff;
        }

        header {
            background-color: #222;
            color: #fff;
            text-align: center;
            padding: 1em 0;
        }

        h2 {
            color: #f2a900;
            text-align: center;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #444;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        button {
            background-color: #f2a900;
            color: #fff;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
            font-family: 'BatmanForeverAlternate', sans-serif;
            font-size: 16px;
        }

        button:hover {
            background-color: #d88800;
        }
    </style>
</head>

<body>

    <header>
        <h1>Order Management System</h1>
    </header>
		
    <h2>Order Summary</h2>



<form method="post" action="">
    <label for="start_date">From Start Date:</label>
    <input type="date" id="start_date" name="start_date" style="padding: 8px; margin: 5px; border: 1px solid #ccc; border-radius: 4px;">

    <label for="end_date">To End Date:</label>
    <input type="date" id="end_date" name="end_date" style="padding: 8px; margin: 5px; border: 1px solid #ccc; border-radius: 4px;">
    
    <button type="submit" name="displayData">Display Data</button>
</form>

<?php
// Check if the form for displaying data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["displayData"])) {
    // Retrieve and display summary information based on the selected date range

    // Get start and end dates from the form
    $startDate = isset($_POST['start_date']) ? $_POST['start_date'] : '';
    $endDate = isset($_POST['end_date']) ? $_POST['end_date'] : '';

    // Include your database connection or use your existing connection
    $conn = new mysqli("localhost", "root", "", "inventorymanagement");

    // Fetch orders data based on the selected date range
    $sql = "SELECT * FROM orders WHERE order_date BETWEEN '$startDate' AND '$endDate'";
    $result = $conn->query($sql);

    // Store orders data in an array for later use
    $ordersData = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $ordersData[] = $row;
        }
    }

    // Get the first and last date from the orders
    $firstOrderDate = !empty($ordersData) ? $ordersData[0]['order_date'] : '';
    $lastOrderDate = !empty($ordersData) ? end($ordersData)['order_date'] : '';

    // Close the database connection
    $conn->close();

 
    $summaryDateTime = date("Y-m-d H:i:s");
}
?>





    <?php if (isset($ordersData) && !empty($ordersData)) : ?>
        <div>
            <!-- Display the date and time of the summary -->
            <p id="summaryDate">Date of Summary: <?php echo $summaryDateTime; ?></p>
        </div>

        <form method="post" action="print_invoice.php">
            <!-- Display order details in a table -->
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Date Ordered</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ordersData as $order) : ?>
                        <tr>
                            <td><?php echo $order["id"]; ?></td>
                            <td><?php echo $order["product_name"]; ?></td>
                            <td><?php echo $order["quantity"]; ?></td>
                            <td><?php echo $order["order_date"]; ?></td>
                            <td><?php echo $order["status"]; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <p><h2>Date Ordered From:</h2>(<?php echo $firstOrderDate . ' ) - ( ' . $lastOrderDate; ?>)</p>
            

<div>
    <h2>Product Status Totals</h2>
    <p><h2>Total Orders: <?php echo calculateTotalOrders($ordersData); ?></p></h2>
    <ul>
        <?php
        $statusTotals = calculateStatusTotals($ordersData);
        foreach ($statusTotals as $status => $totalQuantity) {
            echo "<li>$status: $totalQuantity</li>";
        }
        ?>
    </ul>
	</div>

            <!-- Add a button to print the invoice -->
            <button type="submit" name="printInvoice">Print Burger Invoice</button>
            
        </form>
    <?php else : ?>
        <p>No orders to display.</p>
    <?php endif; ?>


<form method="post" action="table.php">
    <button type="submit" name="goBack">Go Back</button>
</form>



 <script>
        // Function to update the "Date of Summary" every second
        function updateSummaryDate() {
            var summaryDateElement = document.getElementById('summaryDate');
            var currentDate = new Date();
            var formattedDate = currentDate.toLocaleString('en-US', {
                year: 'numeric',
                month: 'numeric',
                day: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric',
                hour12: false
            });
            summaryDateElement.textContent = 'Date of Summary: ' + formattedDate;
        }

        // Update the summary date initially
        window.onload = function () {
            updateSummaryDate();
            // Update the summary date every second
            setInterval(updateSummaryDate, 1000);
        };
    </script>



</body>

</html>
