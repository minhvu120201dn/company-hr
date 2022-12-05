<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'webpr1';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $id = $_GET['id'];
    $sql = "DELETE FROM projects WHERE project_id='$id'";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: ./index.php");
    }
$conn->close();
?>