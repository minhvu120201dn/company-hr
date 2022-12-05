<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = 'company-hr';
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /////   CONNNECT AND RETRIEVE DATA      /////
    if (isset($_POST['submit'])) {
        $title = $_POST['protitle'];
        $startdate = $_POST['startdate'];
        $enddate = $_POST['enddate'];
        $summery = $_POST['summery'];
        $details = $_POST['details'];
        $status = $_POST['prostatus'];
        $sql = "INSERT INTO projects (project_title,project_status,project_start,project_end,project_details,project_summary) VALUES ('$title','$status','$startdate','$enddate','$details','$summery')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ./index.php");
        }
    }
    
}
$conn->close();
?>