<?php
// print_invoice.php

// Start the session
session_start();

date_default_timezone_set('Asia/Manila');

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

// Calculate total orders
function calculateTotalOrders($ordersData)
{
    $totalOrders = 0;
    foreach ($ordersData as $order) {
        $totalOrders += $order["quantity"];
    }
    return $totalOrders;
}

// Calculate status totals
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

// Set content type to HTML
header('Content-Type: text/html');
header('Content-Disposition: attachment; filename="invoice.html"');

// Output your invoice content in HTML
echo "<html><head><title>Invoice</title></head><body>";
echo "<h2>Invoice Sheet</h2>";

if (!empty($ordersData)) {
    // Display the date and time of the summary
    echo "<p>Date of Your Summary: " . date("Y-m-d H:i:s") . "</p>";

    // Display the date range of the orders
    echo "<h3>Order Summary</h3>";

    // Display the order summary details
    echo "<p>Date Ordered From: $firstOrderDate to $lastOrderDate</p>";
    echo "<p>Total Orders: " . calculateTotalOrders($ordersData) . "</p>";

    $statusTotals = calculateStatusTotals($ordersData);
    echo "<h4>Status Totals</h4><ul>";
    foreach ($statusTotals as $status => $totalQuantity) {
        echo "<li>$status: $totalQuantity</li>";
    }
    echo "</ul>";

    // Display order details in a table
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Product Name</th><th>Quantity</th><th>Date Ordered</th><th>Status</th></tr>";
    foreach ($ordersData as $order) {
        echo "<tr><td>{$order['id']}</td><td>{$order['product_name']}</td><td>{$order['quantity']}</td><td>{$order['order_date']}</td><td>{$order['status']}</td></tr>";
    }
    echo "</table>";
} else {
    echo "<p>No orders to display on the invoice.</p>";
}

echo "</body></html>";
?>
