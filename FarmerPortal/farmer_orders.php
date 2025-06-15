<?php
session_start();
$farmer_id = $_SESSION['farmer_id']; // from farmer login session

$conn = new mysqli('localhost', 'root', '', 'your_database_name');

// Fetch pending orders
$sql = "SELECT * FROM orders WHERE farmer_id='$farmer_id' AND status='Pending'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Farmer Pending Orders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h2 class="text-center mb-4">Pending Orders</h2>

    <?php if ($result->num_rows > 0) { ?>
        <table class="table table-bordered table-hover shadow rounded">
            <thead class="table-dark">
                <tr>
                    <th>Order ID</th>
                    <th>Buyer ID</th>
                    <th>Amount (₹)</th>
                    <th>Payment Type</th>
                    <th>Order Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['order_id']; ?></td>
                    <td><?php echo $row['buyer_id']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td><?php echo $row['payment_type']; ?></td>
                    <td><?php echo date('d-m-Y', strtotime($row['order_date'])); ?></td>
                    <td>
                        <a href="confirm_order.php?order_id=<?php echo $row['order_id']; ?>" class="btn btn-success btn-sm">Confirm</a>
                        <a href="reject_order.php?order_id=<?php echo $row['order_id']; ?>" class="btn btn-danger btn-sm">Reject</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <div class="alert alert-info text-center">No pending orders found.</div>
    <?php } ?>

</div>
</body>
</html>
