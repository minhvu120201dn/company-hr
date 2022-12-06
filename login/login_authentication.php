<?php
include "../utils.php";
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$email = test_input($_POST["email"]);
$password = test_input($_POST["password"]);
$sql = "SELECT password FROM employees WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows == 0){
    echo "No user found. mail: $email password: $password";
}
else {
    $user = $result->fetch_assoc();
    if (!password_verify($password, $user["password"])){
        echo "wrong password. mail: $email password: $password";
    }
    else {
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $email;
        header('Location: ./../index.php');
    }
}
?>