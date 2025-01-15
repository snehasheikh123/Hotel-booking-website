<?php
session_start();

require('C:/xampp/htdocs/PGLife/include/config.php');
// if ($_SERVER['REQUEST_METHOD'] == 'POST') 
//     {
$email = $_POST['email'];
$password = $_POST['password'];
// $password = md5($password);

$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
// $result=$conn->query($sql);

 // echo $sql;
//  if ($result->num_rows > 0) {
//     $user = $result->fetch_assoc();
//     //verify password
//     $_SESSION['user_id'] = $user;
//     $_SESSION["email"]= $email;
//     header('location: dashboard.php');
//  }
//  else{
//     echo "<script>
//     alert('Wrong Username and Password'); window.location='login.php'; 
//      </script>";
//  }
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Something went wrong!";
    exit;
}

$row_count = mysqli_num_rows($result);

if ($row_count== 0) {
    echo "<script> alert('Invalid email or password.')
    </script>";
    exit;
}

$row = mysqli_fetch_assoc($result);

     $_SESSION['user_id'] = $row['id'];
     $_SESSION['full_name'] = $row['full_name'];
 $_SESSION['email'] = $row['email'];
    // $_SESSION['user_id'] = $row['id'];
    // $_SESSION['email'] = $row['email'];
    // $_SESSION['full_name'] = $row['full_name'];
    header('Location: ../index.php');
    // click <a href="dashboard.php">Dashboard</a>
    
mysqli_close($conn);


// else{
//     echo "<script>
//     alert('Wrong Username and Password'); window.location='login_modal.php'; 
//      </script>";
// }
//     }
// $_SESSION['user_id'] = $row['id'];
// $_SESSION['email'] = $row['email'];

// header('Location: dashboard.php');
// exit;


?>