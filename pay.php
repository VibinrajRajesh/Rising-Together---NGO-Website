<?php
require('./config/Pconfig.php');
require('Razorpay/Razorpay.php');
session_start();

use Razorpay\Api\Api;

$api = new Api($keyId, $keySecret);

// Get POST values
$price = $_POST['amount'] ?? 0;
$name  = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';

if ($price < 1) {
    die("Amount must be at least ₹1");
}

// Create order
$orderData = [
    'receipt'         => 'rcptid_' . time(),
    'amount'          => $price * 100, // amount in paise
    'currency'        => 'INR',
    'payment_capture' => 1
];

$razorpayOrder = $api->order->create($orderData);
$razorpayOrderId = $razorpayOrder['id'];

?>

<!DOCTYPE html>
<html>
<head>
    <title>Redirecting to Payment...</title>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>
<body>
    <script>
        var options = {
            "key": "<?php echo $keyId; ?>",
            "amount": "<?php echo $orderData['amount']; ?>",
            "currency": "INR",
            "name": "Rising Together",
            "description": "Payment for Order",
            "image": "./assets/img/logo.png",
            "order_id": "<?php echo $razorpayOrderId; ?>",
            "handler": function (response){
                // After successful payment
                window.location.href = "Donation.php?success=true&payment_id=" + response.razorpay_payment_id;
            },
            "prefill": {
                "name": "<?php echo $name; ?>",
                "email": "<?php echo $email; ?>",
                "contact": "<?php echo $phone; ?>"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp = new Razorpay(options);
        rzp.open();
    </script>
</body>
</html>
