<?php
include 'db_conn.php';
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$email = test_input($_POST["email"]);
$password = test_input($_POST["password"]);
$password = password_hash($password, PASSWORD_DEFAULT);

$conn = connect_database();
$sql = "SELECT * FROM employee WHERE email = '$email' AND password = '$password' ";
$result = mysqli_query($conn, $sql);

if ($result->num_rows == 0){
    echo "No user found. mail: $email password: $password";
}
else {
    echo "user connected. mail: $email password: $password";
}
?>