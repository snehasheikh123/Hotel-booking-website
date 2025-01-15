<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $interests = $_POST['interest'] ?? [];
    $city = $_POST['city'] ?? '';
    $address = $_POST['address'] ?? '';

    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Password: " . htmlspecialchars($password) . "<br>";
    echo "Gender: " . htmlspecialchars($gender) . "<br>";
    echo "Interests: " . implode(", ", (array) $interests) . "<br>";
    echo "City: " . htmlspecialchars($city) . "<br>";
    echo "Address: " . nl2br(htmlspecialchars($address));
} else {
    echo "Form data not submitted.";
}
?>

    
</body>
</html>