<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Tourism Management - Payment</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f5f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .payment-container {
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      width: 380px;
    }
    h2 {
      text-align: center;
      color: #2c3e50;
    }
    input, select, button {
      width: 100%;
      padding: 10px;
      margin: 8px 0;
      border-radius: 6px;
      border: 1px solid #ccc;
    }
    button {
      background: #27ae60;
      color: white;
      font-weight: bold;
      border: none;
      cursor: pointer;
    }
    button:hover {
      background: #219150;
    }
  </style>
</head>
<body>
  <div class="payment-container">
    <h2>Payment Page</h2>
    <form action="process_payment.php" method="POST">
      <label>Full Name</label>
      <input type="text" name="name" required>

      <label>Email</label>
      <input type="email" name="email" required>

      <label>Amount</label>
      <input type="number" name="amount" required>

      <label>Card Number</label>
      <input type="text" name="card_number" maxlength="16" required>

      <label>Expiry Date</label>
      <input type="month" name="expiry" required>

      <label>CVV</label>
      <input type="password" name="cvv" maxlength="3" required>

      <button type="submit">Pay Now</button>
    </form>
  </div>
</body>
</html>

<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "tourism_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get values
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$card_number = $_POST['card_number'];
$expiry = $_POST['expiry'];
$cvv = $_POST['cvv'];

// Insert into payment table
$sql = "INSERT INTO payments (name, email, amount, card_number, expiry, cvv)
        VALUES ('$name', '$email', '$amount', '$card_number', '$expiry', '$cvv')";

if ($conn->query($sql) === TRUE) {
    echo "<h2>Payment Successful!</h2>";
    echo "<p>Thank you, $name. Your payment of ₹$amount has been recorded.</p>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

CREATE DATABASE tourism_db;
USE tourism_db;

CREATE TABLE payments (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  email VARCHAR(100),
  amount DECIMAL(10,2),
  card_number VARCHAR(16),
  expiry VARCHAR(7),
  cvv VARCHAR(3),
  payment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
