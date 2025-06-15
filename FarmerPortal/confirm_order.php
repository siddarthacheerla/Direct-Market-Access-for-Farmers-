<?php
// Include the database connection
include('../db.php');
session_start();  // Start the session to access session data

// Check if the farmer's phone number is set in the session
if (!isset($_SESSION['phonenumber'])) {
    die('Farmer phone number not found in session.');
}

// Check if the order ID is provided
if (isset($_GET['order_id'])) {
    $order_id = $_GET['order_id'];

    // Ensure the order belongs to the logged-in farmer
    $farmer_phone = $_SESSION['phonenumber'];

    // Query to get the farmer's ID from the phone number
    $query_farmer = "SELECT farmer_id FROM farmerregistration WHERE farmer_phone = '$farmer_phone'";
    $result_farmer = mysqli_query($con, $query_farmer);

    if (mysqli_num_rows($result_farmer) > 0) {
        $row = mysqli_fetch_assoc($result_farmer);
        $farmer_id = $row['farmer_id'];

        // Query to check if the order belongs to the logged-in farmer
        $query_check_order = "SELECT * FROM farmer_orders WHERE order_id = '$order_id' AND farmer_id = '$farmer_id'";
        $result_check_order = mysqli_query($con, $query_check_order);

        if (mysqli_num_rows($result_check_order) > 0) {
            // Update the order status to 'Confirmed'
            $query = "UPDATE farmer_orders SET status = 'Confirmed' WHERE order_id = '$order_id'";

            if (mysqli_query($con, $query)) {
                // Redirect to the farmer orders page with a success message
                header("Location: farmer_orders.php?status=confirmed");
                exit();  // Make sure the script stops execution after redirect
            } else {
                echo "Error updating order: " . mysqli_error($con);
            }
        } else {
            echo "This order does not belong to the logged-in farmer.";
        }
    } else {
        echo "Farmer not found.";
    }
} else {
    echo "Order ID not provided!";
}
?>
