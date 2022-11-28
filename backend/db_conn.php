<?php
function connect_database(){
    $hostName = "localhost";
    $userName = "root";
    $password = "Thanhvaviet!!";
    $dbName = "webdev";
    $conn = mysqli_connect($hostName, $userName, $password, $dbName);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }
}
?>