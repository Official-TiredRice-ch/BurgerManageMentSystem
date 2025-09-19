<?php
// updateOrderStatus.php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['orderId']) && isset($_POST['status'])) {
    $id = intval($_POST['orderId']); // Update this line to use 'orderId'
    $status = $_POST['status'];

    // Assuming you have a database connection
    $conn = new mysqli("localhost", "root", "", "inventorymanagement");

    // Check if the connection is successful
    if ($conn->connect_error) {
        echo json_encode(['success' => false, 'error' => 'Database connection failed']);
        exit;
    }

    // Update the order status in the 'orders' table
    $updateSql = "UPDATE orders SET status = ? WHERE id = ?";
    $stmt = $conn->prepare($updateSql);
    $stmt->bind_param("si", $status, $id);

    if ($stmt->execute()) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Error updating order status']);
    }

    // Close the database connection
    $stmt->close();
    $conn->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}
?>
