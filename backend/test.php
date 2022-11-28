<?php
include 'db_conn.php';
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
}

if (isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
        echo "Invalid email format";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";
        echo "Invalid email format";
    }
    if (empty($_POST["password"])){
        $passErr = "Password is required";
        echo "Password is required";
    }
}

$conn = connect_database();
$sql = "SELECT * FROM users WHERE username = '$email' AND password = '$password' ";
$result = mysqli_query($conn, $sql);

if ($result->num_rows == 0){
    echo "No user found";
}
?>