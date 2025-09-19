<?php

session_start();

// Check if the request is valid
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && strtolower($_POST['action']) === 'order_now') {
    // Retrieve the product ID and quantity from the POST data
    $productId = isset($_POST['productId']) ? intval($_POST['productId']) : 0;
    $quantity = isset($_POST['quantity']) ? intval($_POST['quantity']) : 1;

    // Assume you have a database connection
    $conn = new mysqli("localhost", "root", "", "inventorymanagement");

    // Check if the connection is successful
    if ($conn->connect_error) {
        echo json_encode(['success' => false, 'error' => 'Database connection failed']);
        exit;
    }

    // Retrieve the user ID from the session (adjust based on your user session management)
    $userId = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : 0;

    // Retrieve product information using the selected product ID
    $sql = "SELECT * FROM product WHERE product_id = $productId";
    $result = $conn->query($sql);

    // Check if the product is found
   if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $availableQuantity = $row['quantity'];

    // Check if the product has a positive quantity
    if ($availableQuantity >= $quantity && $quantity > 0) {
        // Update the 'product' table to decrease the quantity
        $updateSql = "UPDATE product SET quantity = quantity - $quantity WHERE product_id = $productId";
        $updateResult = $conn->query($updateSql);

        if ($updateResult) {
            // Add the order to the 'orders' table with status 'pending'
            $orderDate = date('Y-m-d H:i:s');
            $insertSql = "INSERT INTO orders (id, product_name, order_date, quantity, status) VALUES ($userId, '{$row['product_name']}', '$orderDate', $quantity, 'pending')";
            $insertResult = $conn->query($insertSql);

            if ($insertResult) {
                // Calculate the total amount
                $totalAmount = $row['price'] * $quantity;

                // Add the order details to the session for order summary
                $orderDetails = [
                    'product_id' => $productId,
                    'product_name' => $row['product_name'],
                    'quantity' => $quantity,
                    'total_amount' => $totalAmount
                ];

                if (!isset($_SESSION['orders'])) {
                    $_SESSION['orders'] = [];
                }

                $_SESSION['orders'][] = $orderDetails;

                // Return a success response with the total amount and product name
                echo json_encode(['success' => true, 'totalAmount' => $totalAmount, 'productName' => $row['product_name']]);
            } else {
                echo json_encode(['success' => false, 'error' => 'Error inserting order into the database', 'debug' => $conn->error]);
            }
        } else {
            echo json_encode(['success' => false, 'error' => 'Error updating product quantity', 'debug' => $conn->error]);
        }
    } else {
        echo json_encode(['success' => false, 'error' => 'Invalid quantity or insufficient stock']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Product not found']);
}


    // Close the database connection
    $conn->close();
} else {
    echo json_encode(['success' => false, 'error' => 'Invalid request']);
}
?>
