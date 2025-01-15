<?php 
require('C:/xampp/htdocs/PGLife/include/config.php');

// Check if the required POST data is set
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (!isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['full_name']) || !isset($_POST['phone']) || !isset($_POST['college_name']) || !isset($_POST['gender'])) {
//         $response = array("success" => false, "message" => "Required fields are missing.");
//         echo json_encode($response);
//         return;
//     }



// Check if required fields are set
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $fields = ['email', 'password', 'full_name', 'phone', 'college_name', 'gender'];
//     foreach ($fields as $field) {
//         if (!isset($_POST[$field])) {
//             echo json_encode(["success" => false, "message" => "Required fields are missing."]);
//             return;
//         }
//     }
$full_name = $_POST['full_name'];   
$phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $college_name = $_POST['college_name'];
    $gender = $_POST['gender'];

    // Secure the password using password_hash
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Check if the email is already registered
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        $response = array("success" => false, "message" => "Something went wrong!");
        echo json_encode($response);
        return;
    }

    $row_count = mysqli_num_rows($result);
    if ($row_count != 0) {
        $response = array("success" => false, "message" => "This email id is already registered with us!");
        echo json_encode($response);
        return;
    }

    // Insert user data into the database
    $sql = "INSERT INTO users (email, password, full_name, phone, college_name, gender) 
            VALUES ('$email', '$password', '$full_name', '$phone', '$college_name', '$gender')";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
            $response = array("success" => false, "message" => "Something went wrong! ");

        echo json_encode($response);
        return;
    }

    $response = array("success" => true, "message" => "Your account has been created successfully!");
    echo json_encode($response);
    mysqli_close($conn);

?>
